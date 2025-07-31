<div>
    <h2 class="mb-3">Kalender & Todo List</h2>
    @if (session()->has('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div>
        @livewireCalendar($this)
    </div>

    @if($showAddModal)
        <div class="modal fade show d-block" tabindex="-1" style="background:rgba(0,0,0,0.3);">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Todo untuk {{ \Carbon\Carbon::parse($modalDate)->translatedFormat('l, d F Y') }}</h5>
                        <button type="button" class="close" wire:click="$set('showAddModal', false)">&times;</button>
                    </div>
                    <form wire:submit.prevent="addTodoFromModal">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" class="form-control" wire:model.defer="modalTitle" required>
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <input type="text" class="form-control" wire:model.defer="modalDescription">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" wire:click="$set('showAddModal', false)">Batal</button>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal-backdrop fade show"></div>
    @endif
</div>
