<?php

$domains = $this->passedArgs;

?>

<h1><?php echo _("Domains"); ?></h1>

<form method="POST" action="<?php echo $this->buildLink(array('action' => 'delete')); ?>">

    <table class="list">
        
        <thead>
        <tr>
            <th></th>
            <th></th>
            <th><?php echo _("Name"); ?></th>
            <th><?php echo _("OSCARS IP"); ?></th>
            <th><?php echo _("Topology ID"); ?></th>
            <th><?php echo _("ODE IP"); ?></th>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($domains as $d): ?>
        <tr>
            <td>
                <input type="checkbox" name="del_checkbox[]" value="<?php echo $d->id; ?>"/>
            </td>
            <td>
                <a href="<?php echo $this->buildLink(array('action' => 'edit', 'param' => "dom_id:$d->id")); ?>">
                    <img class="edit" src="layouts/img/edit_1.png"/>
                </a>
            </td>                
            <td>
                <?php echo $d->descr; ?>
            </td>
            <td>
                <?php echo $d->oscars_ip; ?>
            </td>
            <td>
                <?php echo $d->topology_id; ?>
            </td>
            <td>
                <?php echo $d->ode_ip; ?>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>

        <tfoot>
        <tr>
            <td colspan="6">
                <input class="add" type="button" value="<?php echo _('Add'); ?>" onclick="redir('<?php echo $this->buildLink(array('action' => 'add_form')); ?>');"/>
            </td>
        </tr>
        </tfoot>

    </table>
    
    <div class="controls">
        <input class="delete" type="submit" value="<?php echo _('Delete'); ?>" onClick="return confirm('<?php echo _('The selected domains will be deleted.'); echo '\n'; echo _('Do you confirm?'); ?>')"/>
    </div>
    
</form>