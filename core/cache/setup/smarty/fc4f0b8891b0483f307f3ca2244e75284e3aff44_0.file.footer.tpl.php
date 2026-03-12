<?php
/* Smarty version 4.5.5, created on 2025-12-22 11:39:44
  from 'C:\xampp\htdocs\airport-parking\setup\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69491ff0369c42_25997650',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc4f0b8891b0483f307f3ca2244e75284e3aff44' => 
    array (
      0 => 'C:\\xampp\\htdocs\\airport-parking\\setup\\templates\\footer.tpl',
      1 => 1743569434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69491ff0369c42_25997650 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\airport-parking\\core\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'C:\\xampp\\htdocs\\airport-parking\\core\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
            </div>
        </div>
    </div>

    <!-- start footer -->
    <footer>
        <div class="wrapper">
            <div class="copyrite">
                <p><?php ob_start();
echo smarty_modifier_date_format(time(),"%Y");
$_prefixVariable1 = ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_prefixVariable1);?>
</p>
            </div>
            <div class="copyrite_info">
                <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
            </div>
        </div>
    </footer>
    <!-- end footer -->
</body>

</html>
<?php }
}
