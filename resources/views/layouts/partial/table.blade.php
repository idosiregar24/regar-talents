@forelse ($clients as $client)
    <tr class="single-item clickable-row" data-href="{{ route('clients.show', $client->id_client) }}">

        <!-- CHECKBOX -->
        <td>
            <div class="item-checkbox ms-1">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input checkbox stop-click"
                        id="checkBox_{{ $client->id_client }}">
                    <label class="custom-control-label stop-click" for="checkBox_{{ $client->id_client }}"></label>
                </div>
            </div>
        </td>

        <!-- CLIENT -->
        <td>
            <span class="fw-semibold">
                {{ $client->nama }}
            </span>
        </td>

        <!-- EMAIL -->
        <td class="stop-click">
            <a href="mailto:{{ $client->email }}">
                {{ $client->email }}
            </a>
        </td>

        <!-- NIK -->
        <td>{{ $client->nik }}</td>

        <!-- PHONE -->
        <td class="stop-click">
            <a href="tel:{{ $client->no_hp }}">
                {{ $client->no_hp }}
            </a>
        </td>

        <!-- DATE -->
        <td>
            {{ $client->created_at->format('Y-m-d, H:i') }}
        </td>

        <!-- ACTION -->
        <td class="stop-click">
            <div class="hstack gap-2 justify-content-end">
                <a href="{{ route('clients.show', $client->id_client) }}" class="avatar-text avatar-md">
                    <i class="feather feather-eye"></i>
                </a>

                <div class="dropdown">
                    <a href="javascript:void(0);" class="avatar-text avatar-md" data-bs-toggle="dropdown">
                        <i class="feather feather-more-horizontal"></i>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{ route('clients.edit', $client->id_client) }}">
                                <i class="feather feather-edit-3 me-3"></i>
                                Edit
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item text-danger" href="javascript:void(0);">
                                <i class="feather feather-trash-2 me-3"></i>
                                Hapus
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="8" class="text-center text-muted">
            Data klien belum tersedia
        </td>
    </tr>
@endforelse

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('filterForm');
        const input = document.getElementById('searchInput');
        const table = document.getElementById('clientTable');

        if (!form || !input || !table) return;

        let debounceTimer;

        // 🔴 LIVE SEARCH
        input.addEventListener('keyup', function() {
            clearTimeout(debounceTimer);

            debounceTimer = setTimeout(() => {
                fetchData();
            }, 300);
        });

        // 🔴 FILTER KELAS (CHANGE)
        form.querySelector('[name="kelas"]').addEventListener('change', fetchData);

        function fetchData() {
            const params = new URLSearchParams(new FormData(form));

            fetch(form.action + '?' + params.toString(), {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(res => res.text())
                .then(html => {
                    table.innerHTML = html;
                })
                .catch(err => console.error(err));
        }
    });
</script>
<script>
document.addEventListener('click', function (e) {
    const row = e.target.closest('.clickable-row');

    // Kalau klik bukan di row
    if (!row) return;

    // Cegah redirect jika klik elemen tertentu
    if (
        e.target.closest('.stop-click') ||
        e.target.tagName === 'A' ||
        e.target.tagName === 'INPUT' ||
        e.target.closest('.dropdown')
    ) {
        return;
    }

    window.location.href = row.dataset.href;
});
</script>
