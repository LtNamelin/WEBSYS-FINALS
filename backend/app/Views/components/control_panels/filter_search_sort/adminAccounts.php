<form id="accountsFilterForm" onsubmit="return false;" class="flex sm:flex-row flex-col sm:items-center gap-3 mb-4">
    <input type="search" id="accounts_query" placeholder="Search by name or email" class="shadow-sm px-3 py-2 color-light-latte border border-slate-200 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 w-full sm:w-1/3">

    <select id="accounts_sort" class="shadow-sm px-3 py-2 color-light-latte border border-slate-200 rounded-md focus:outline-none w-full sm:w-48 cursor-pointer">
        <option value="">Sort — default</option>
        <option value="name_asc">Name A → Z</option>
        <option value="name_desc">Name Z → A</option>
        <option value="email_asc">Email A → Z</option>
        <option value="email_desc">Email Z → A</option>
    </select>

    <select id="accounts_type" class="shadow-sm px-3 py-2 color-light-latte border border-slate-200 rounded-md focus:outline-none w-full sm:w-48 cursor-pointer">
        <option value="all">Type — all</option>
        <option value="manager">Manager</option>
        <option value="admin">Admin</option>
        <option value="employee">Employee</option>
        <option value="premium_client">Premium Client</option>
        <option value="regular_client">Regular Client</option>
    </select>

    <div class="flex color-light-latte gap-2 ml-auto  rounded-md">
        <button type="button" id="accountsResetBtn" class="inline-flex items-center bg-white hover:bg-slate-50 shadow-sm px-3 py-2 border border-slate-200 rounded-md cursor-pointer">Reset</button>
    </div>
</form>

<script>
    (function() {
        function waitForTable(maxAttempts = 40, interval = 50) {
            return new Promise((resolve) => {
                let attempts = 0;
                const intervalId = setInterval(() => {
                    const table = document.querySelector('table');
                    attempts++;
                    if (table || attempts >= maxAttempts) {
                        clearInterval(intervalId);
                        resolve(table);
                    }
                }, interval);
            });
        }

        function initForTable(table) {
            if (!table) return;

            const queryInput = document.getElementById('accounts_query');
            const sortSelect = document.getElementById('accounts_sort');
            const typeSelect = document.getElementById('accounts_type');
            const resetBtn = document.getElementById('accountsResetBtn');

            // Build array snapshot of rows with searchable fields
            const rows = Array.from(table.querySelectorAll('tbody tr'));
            const snapshot = rows.map(row => {
                const cols = Array.from(row.querySelectorAll('td'));
                const name = (
                    ((cols[0]?.textContent ?? '') + ' ' +
                     (cols[1]?.textContent ?? '') + ' ' +
                     (cols[2]?.textContent ?? '')).trim().toLocaleLowerCase()
                );
                const email = (cols[3] ? cols[3].textContent.trim() : '').toLowerCase();
                const type = (cols[4] ? cols[4].textContent.trim() : '').toLowerCase();
                return {
                    row,
                    name,
                    email,
                    type,
                    html: row.outerHTML
                };
            });

            function render(list) {
                const tbody = table.querySelector('tbody');
                if (!list.length) {
                    tbody.innerHTML = '<tr><td class="p-3" colspan="8">No accounts match your search.</td></tr>';
                    return;
                }
                tbody.innerHTML = list.map(i => i.html).join('\n');
            }

            function apply() {
                const query = (queryInput.value || '').toLowerCase().trim();
                const sort = sortSelect.value;
                const typeFilter = (typeSelect && typeSelect.value) ? typeSelect.value : 'all';

                let out = snapshot.filter(item => {
                    if (query && !(item.name.includes(query) || item.email.includes(query))) 
                    {
                        return false;
                    }

                    // type filtering
                    if (typeFilter && typeFilter !== 'all') 
                    {
                        if (typeFilter === 'employee') 
                        {
                            if (item.type === 'regular_client' || item.type === 'premium_client' || item.type === '') 
                            return false;
                        } 
                        else 
                        {
                            if (item.type !== typeFilter) 
                            return false;
                        }
                    }
                    return true;
                });

                if (sort === 'name_asc') out.sort((a, b) => a.name.localeCompare(b.name));
                else if (sort === 'name_desc') out.sort((a, b) => b.name.localeCompare(a.name));
                else if (sort === 'email_asc') out.sort((a, b) => a.email.localeCompare(b.email));
                else if (sort === 'email_desc') out.sort((a, b) => b.email.localeCompare(a.email));

                render(out);
            }

            [queryInput, sortSelect, typeSelect].forEach(el => el && el.addEventListener('input', apply));
            resetBtn && resetBtn.addEventListener('click', () => {
                queryInput.value = '';
                sortSelect.value = '';
                if (typeSelect) typeSelect.value = 'all';
                apply();
            });

            // initial
            apply();
        }

        // Wait for DOM ready and the table to exist (useful if table is rendered server-side after this include)
        if (document.readyState === 'complete' || document.readyState === 'interactive') {
            waitForTable().then(initForTable);
        } else {
            document.addEventListener('DOMContentLoaded', () => waitForTable().then(initForTable));
        }
    })();
</script>