<form action="<?php echo esc_url(home_url( )); ?>" method="get">
    <div class="form-group">
        <input type="text" placeholder="Search" name="s" id="s" onfocus="if(thi.value=='Search'){this.value='';}" onblur="if(this.value==''){this.value= 'Search'}" >
     
        <button type="submit"><i class="fa fa-search"></i></button>
    </div>
</form>