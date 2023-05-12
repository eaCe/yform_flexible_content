<div class="dropdown" x-show="fieldTypes.length">
    <button class="btn btn-primary" type="button" data-toggle="dropdown">
        <i class="fa fa-plus" aria-hidden="true"></i> <?= rex_i18n::msg('yform_flexible_content_add_field') ?>
    </button>
    <ul class="dropdown-menu ">
        <template x-for="(field, index) in fieldTypes">
            <li>
                <a href="#" @click.prevent="addField(field, group)" x-text="field.label"></a>
            </li>
        </template>
    </ul>
</div>