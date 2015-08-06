<?php echo $this->Html->script('bootstrap.min.js');?>

<script type="text/javascript">
    $(function(){
        $('.affix').affix({
                offset: {
                top: 100,
                bottom: function () {
                  return (this.bottom = $('.footer').outerHeight(true))
                }
            }
        });
    });
</script>

