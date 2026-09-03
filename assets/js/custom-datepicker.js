document.addEventListener('DOMContentLoaded', function() {
    function setupHiddenDatePickers() {
        // 1. Tangani wrapper seperti .date-filter-pill-box yang punya input type text read-only
        const textWrappers = document.querySelectorAll('.date-filter-pill-box');
        textWrappers.forEach(wrap => {
            if (wrap.dataset.customPickerInit) return;
            wrap.dataset.customPickerInit = 'true';

            const txtInput = wrap.querySelector('input[type="text"]');
            const icon = wrap.querySelector('.material-symbols-outlined');
            if (!txtInput) return;

            wrap.style.position = 'relative';

            const hiddenPicker = document.createElement('input');
            hiddenPicker.type = 'date';
            hiddenPicker.style.position = 'absolute';
            hiddenPicker.style.opacity = '0';
            hiddenPicker.style.width = '100%';
            hiddenPicker.style.height = '100%';
            hiddenPicker.style.top = '0';
            hiddenPicker.style.left = '0';
            hiddenPicker.style.cursor = 'pointer';
            hiddenPicker.style.zIndex = '2';

            // Jika ada initial value DD/MM/YYYY
            if (txtInput.value && txtInput.value.includes('/')) {
                const parts = txtInput.value.split('/');
                if (parts.length === 3) {
                    hiddenPicker.value = `${parts[2]}-${parts[1]}-${parts[0]}`;
                }
            }

            hiddenPicker.addEventListener('change', function() {
                if (this.value) {
                    const parts = this.value.split('-'); // YYYY-MM-DD
                    if (parts.length === 3) {
                        txtInput.value = `${parts[2]}/${parts[1]}/${parts[0]}`;
                    }
                } else {
                    txtInput.value = '';
                }
            });

            if (icon) {
                icon.style.position = 'relative';
                icon.style.zIndex = '1';
            }
            
            txtInput.style.position = 'relative';
            txtInput.style.zIndex = '1';
            
            wrap.appendChild(hiddenPicker);
        });

        // 2. Tangani input yang aslinya bertipe "date" (misal di input_maintenance.php)
        const dateInputs = document.querySelectorAll('input[type="date"]');
        dateInputs.forEach(dt => {
            // Jangan jadikan hidden picker jika ini adalah picker tersembunyi kita
            if (dt.style.opacity === '0') return;
            if (dt.dataset.customPickerInit) return;
            dt.dataset.customPickerInit = 'true';

            const originalId = dt.id;
            const originalClass = dt.className;
            const originalStyle = dt.getAttribute('style') || '';
            const originalPlaceholder = dt.getAttribute('placeholder') || 'dd/mm/yyyy';

            const wrap = document.createElement('div');
            wrap.style.position = 'relative';
            wrap.style.display = 'inline-block';
            wrap.style.width = dt.style.width || '100%';
            if (dt.parentElement.classList.contains('user-date-input-group')) {
                wrap.style.width = '100%';
                wrap.style.height = '100%';
            }

            const visibleInput = document.createElement('input');
            visibleInput.type = 'text';
            if (originalId) visibleInput.id = originalId;
            visibleInput.className = originalClass;
            visibleInput.setAttribute('style', originalStyle);
            visibleInput.style.backgroundColor = 'transparent';
            visibleInput.placeholder = originalPlaceholder;
            visibleInput.autocomplete = 'off';
            visibleInput.readOnly = true;

            const hiddenPicker = document.createElement('input');
            hiddenPicker.type = 'date';
            hiddenPicker.style.position = 'absolute';
            hiddenPicker.style.opacity = '0';
            hiddenPicker.style.width = '100%';
            hiddenPicker.style.height = '100%';
            hiddenPicker.style.top = '0';
            hiddenPicker.style.left = '0';
            hiddenPicker.style.cursor = 'pointer';
            hiddenPicker.style.zIndex = '2';

            if (dt.value) {
                hiddenPicker.value = dt.value;
                const parts = dt.value.split('-');
                if (parts.length === 3) {
                    visibleInput.value = `${parts[2]}/${parts[1]}/${parts[0]}`;
                }
            }

            hiddenPicker.addEventListener('change', function() {
                if (this.value) {
                    const parts = this.value.split('-'); // YYYY-MM-DD
                    if (parts.length === 3) {
                        visibleInput.value = `${parts[2]}/${parts[1]}/${parts[0]}`;
                    }
                } else {
                    visibleInput.value = '';
                }
            });

            dt.parentNode.insertBefore(wrap, dt);
            wrap.appendChild(visibleInput);
            wrap.appendChild(hiddenPicker);
            dt.remove();
        });
    }

    setupHiddenDatePickers();
});
