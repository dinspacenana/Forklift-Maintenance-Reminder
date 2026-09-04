/**
 * assets/js/table-pagination.js
 * Universal automatic pagination engine for all tables in Forklift Maintenance Reminder (FMR).
 * 
 * Rules:
 * - Max rows per page: 10
 * - If total rows <= 10: Pagination footer and divider line are completely hidden.
 * - If total rows > 10: Pagination appears with page numbers (1, 2, ...), displaying max 10 rows per page.
 * - When searching/filtering: Dynamically recalculates visible rows and shows/hides pagination accordingly.
 */
(function () {
    'use strict';

    const ROWS_PER_PAGE = 10;

    function setupTablePagination(cardContainer) {
        const table = cardContainer.querySelector('table');
        if (!table) return;

        const tbody = table.querySelector('tbody');
        if (!tbody) return;

        // Find pagination footer container (.table-pagination-footer or .table-pagination-wrapper)
        let paginationFooter = cardContainer.querySelector('.table-pagination-footer, .table-pagination-wrapper');
        if (!paginationFooter) {
            const customPag = cardContainer.querySelector('.pagination-custom');
            if (customPag) {
                paginationFooter = customPag.closest('div.d-flex') || customPag.parentElement;
            }
        }
        if (!paginationFooter) return;

        const paginationList = cardContainer.querySelector('.pagination-custom');
        if (!paginationList) return;

        // Also detect standalone <hr class="unit-divider-bottom"> if present
        const hrDivider = cardContainer.querySelector('.unit-divider-bottom');

        // Collect all non-placeholder data rows
        const originalRows = Array.from(tbody.querySelectorAll('tr')).filter(tr => {
            return !tr.querySelector('td[colspan]');
        });

        let currentFilteredRows = originalRows;
        let currentPage = 1;
        let activeFilterFn = null;

        function applyCustomFilter(filterFn) {
            activeFilterFn = (typeof filterFn === 'function') ? filterFn : null;
            if (activeFilterFn) {
                currentFilteredRows = originalRows.filter(activeFilterFn);
            } else {
                currentFilteredRows = originalRows;
            }
            currentPage = 1;
            refreshPagination();
        }

        cardContainer.__applyFilter = applyCustomFilter;
        table.__applyFilter = applyCustomFilter;

        // Check for initial status filter button specifically for reminder page table
        if (cardContainer.querySelector('#reminderTable')) {
            const initialStatusBtn = cardContainer.querySelector('#filterStatus span');
            if (initialStatusBtn) {
                const initText = initialStatusBtn.textContent.trim().toLowerCase();
                if (initText === 'semua status') {
                    activeFilterFn = function(row) {
                        const s = (row.dataset.status || '').trim().toLowerCase();
                        return s === 'menunggu' || s === 'gagal';
                    };
                    currentFilteredRows = originalRows.filter(activeFilterFn);
                } else if (initText === 'terkirim') {
                    activeFilterFn = function(row) {
                        return (row.dataset.status || '').trim().toLowerCase() === 'terkirim';
                    };
                    currentFilteredRows = originalRows.filter(activeFilterFn);
                } else if (initText !== '' && initText !== 'status') {
                    activeFilterFn = function(row) {
                        return (row.dataset.status || '').trim().toLowerCase() === initText;
                    };
                    currentFilteredRows = originalRows.filter(activeFilterFn);
                }
            }
        }

        function refreshPagination() {
            const total = currentFilteredRows.length;
            const totalPages = Math.ceil(total / ROWS_PER_PAGE);

            // If total rows <= 10: HIDE PAGINATION & DIVIDER COMPLETELY
            if (total <= ROWS_PER_PAGE) {
                paginationFooter.style.setProperty('display', 'none', 'important');
                if (hrDivider) hrDivider.style.setProperty('display', 'none', 'important');

                // Make sure all filtered rows are shown
                originalRows.forEach(row => {
                    if (currentFilteredRows.includes(row)) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
                return;
            }

            // If total rows > 10: SHOW PAGINATION & DIVIDER
            paginationFooter.style.setProperty('display', 'flex', 'important');
            if (hrDivider) hrDivider.style.setProperty('display', 'block', 'important');

            if (currentPage > totalPages) currentPage = totalPages;
            if (currentPage < 1) currentPage = 1;

            const startIndex = (currentPage - 1) * ROWS_PER_PAGE;
            const endIndex = startIndex + ROWS_PER_PAGE;

            // Update row visibility according to current page
            originalRows.forEach(row => {
                const idx = currentFilteredRows.indexOf(row);
                if (idx >= 0 && idx >= startIndex && idx < endIndex) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });

            // Build pagination buttons
            renderPaginationUI(totalPages);
        }

        function renderPaginationUI(totalPages) {
            paginationList.innerHTML = '';

            // Previous Button '<'
            const prev = document.createElement('a');
            prev.href = '#';
            prev.className = 'page-arrow' + (currentPage === 1 ? ' disabled' : '');
            prev.innerHTML = '&lt;';
            prev.style.opacity = (currentPage === 1) ? '0.4' : '1';
            prev.style.cursor = (currentPage === 1) ? 'default' : 'pointer';
            prev.addEventListener('click', function (e) {
                e.preventDefault();
                if (currentPage > 1) {
                    currentPage--;
                    refreshPagination();
                }
            });
            paginationList.appendChild(prev);

            // Page Number Buttons
            for (let p = 1; p <= totalPages; p++) {
                const pageBtn = document.createElement('a');
                pageBtn.href = '#';
                pageBtn.className = 'page-num' + (p === currentPage ? ' active' : '');
                pageBtn.textContent = p;
                pageBtn.addEventListener('click', (function (pageNum) {
                    return function (e) {
                        e.preventDefault();
                        currentPage = pageNum;
                        refreshPagination();
                    };
                })(p));
                paginationList.appendChild(pageBtn);
            }

            // Next Button '>'
            const next = document.createElement('a');
            next.href = '#';
            next.className = 'page-arrow' + (currentPage === totalPages ? ' disabled' : '');
            next.innerHTML = '&gt;';
            next.style.opacity = (currentPage === totalPages) ? '0.4' : '1';
            next.style.cursor = (currentPage === totalPages) ? 'default' : 'pointer';
            next.addEventListener('click', function (e) {
                e.preventDefault();
                if (currentPage < totalPages) {
                    currentPage++;
                    refreshPagination();
                }
            });
            paginationList.appendChild(next);
        }

        // Live search binding
        const searchInput = cardContainer.querySelector('input[type="text"]') ||
            document.querySelector('.unit-search-pill input, .customer-search-pill input, #searchUnitInput, #searchCustomerInput');

        if (searchInput && !searchInput.dataset.paginationBound) {
            searchInput.dataset.paginationBound = 'true';
            searchInput.addEventListener('input', function () {
                const q = this.value.toLowerCase().trim();
                currentFilteredRows = originalRows.filter(row => {
                    const matchesSearch = !q || row.textContent.toLowerCase().includes(q);
                    const matchesCustom = activeFilterFn ? activeFilterFn(row) : true;
                    return matchesSearch && matchesCustom;
                });
                currentPage = 1;
                refreshPagination();
            });
        }

        // Initial setup
        refreshPagination();
    }

    function initAllTablePagination() {
        // Target all possible card containers with tables
        const cards = document.querySelectorAll(
            '.customer-table-card, .unit-forklift-main-card, .user-mgmt-card, .dashboard-container'
        );
        cards.forEach(setupTablePagination);
    }

    // Expose to window for dynamic page changes
    window.initTablePagination = initAllTablePagination;

    // Run on document ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initAllTablePagination);
    } else {
        initAllTablePagination();
    }
})();
