<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Pizza'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pizza form large-9 medium-8 columns content">
    <?= $this->Form->create($pizza) ?>
    <fieldset>
        <legend><?= __('Add Pizza') ?></legend>
        <?php
            echo $this->Form->input('size',array(
            'options' => array('small','Medium','Large','Extralarge'),
                                   'empty' => 'select size'
                                    ));
            echo $this->Form->input('quantity');
            
            echo $this->Form->input('topping');
            
            echo $this->Form->input('crust',array(
            'options' => array('classic crust','cheesy crust','Thin crispy','hand tossed'),
                                   'empty' => 'select crust'
                                    ));
            echo $this->Form->input('delivery_type',array(
            'options' => array('pick-up','Home-Delievery'),
                                   'empty' => 'select Delievery type'
                                    ));
            echo $this->Form->input('address');
            echo $this->Form->input('pin_code');
            echo $this->Form->input('phone');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->button(__('Reset')) ?>
    <?= $this->Form->end() ?>
</div>
