<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pizza'), ['action' => 'edit', $pizza->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pizza'), ['action' => 'delete', $pizza->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pizza->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pizza'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pizza'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pizza view large-9 medium-8 columns content">
    <h3><?= h($pizza->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Size') ?></th>
            <td><?= h($pizza->size) ?></td>
        </tr>
        <tr>
            <th><?= __('Topping') ?></th>
            <td><?= h($pizza->topping) ?></td>
        </tr>
        <tr>
            <th><?= __('Crust') ?></th>
            <td><?= h($pizza->crust) ?></td>
        </tr>
        <tr>
            <th><?= __('Delivery Type') ?></th>
            <td><?= h($pizza->delivery_type) ?></td>
        </tr>
        <tr>
            <th><?= __('Address') ?></th>
            <td><?= h($pizza->address) ?></td>
        </tr>
        <tr>
            <th><?= __('Pin Code') ?></th>
            <td><?= h($pizza->pin_code) ?></td>
        </tr>
        <tr>
            <th><?= __('Phone') ?></th>
            <td><?= h($pizza->phone) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($pizza->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Quantity') ?></th>
            <td><?= $this->Number->format($pizza->quantity) ?></td>
        </tr>
    </table>
</div>
