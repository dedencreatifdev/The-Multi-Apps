<?php

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;

new class extends Component {
    use WithPagination;
    #[Computed]
    public function mount(User $user)
    {
        $this->users = $user;
    }

    public function userList()
    {
        return User::cursorPaginate(10);
    }
};
?>

<div>
    <div class="row">
        <div class="col-12">
            <div class="card card-outline card-danger">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-envelope"></i>
                        Buttons
                    </h3>
                </div>
                <div class="card-body p-0">
                    <table class="table table-sm table-striped">
                        <thead class="bg-danger">
                            <tr>
                                <th>No</th>
                                <th>No Pesanan</th>
                                <th>Nama</th>
                                <!-- <th>Alamat</th> -->
                                <th>No telepon</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($this->userList() as $item)
                                <tr>
                                    <td></td>
                                    <td>{{ $item->name }}</td>
                                    <td>Deden</td>
                                    <!-- <td>bandar lampung Unit 4 tulang Bawang</td> -->
                                    <td>082280065006</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer clearfix">
                    {{ $this->userList()->links('vendor.livewire.simple-bootstrap') }}
                </div>
            </div>

        </div>
    </div>
</div>
