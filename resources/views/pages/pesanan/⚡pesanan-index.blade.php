<?php

use Livewire\Component;
use Livewire\Attributes\Title;

new #[Title('Pesanan')] class  extends Component {
    public $title = 'My Post';
};
?>



<div>
    <livewire:pages::pesanan.pesanan-info defer.bundle />
    <livewire:pages::pesanan.pesanan-table lazy />
</div>
