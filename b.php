<script src="templates/default/js/jquery-1.10.2.js"></script>
<p>
    <i onclick='chang_num(this);'>12</i>
    
</p>
<script>
    function chang_num(t){
         $(t).parent().html("<input type='text' value='"+$(t).html()+"' name='num'>");
        $('input[name="num"]').focus();
         $('input[name="num"]').bind('blur',function (){
             var v=$(this).val();
             $(this).parent().html("<i onclick='chang_num(this);'>"+v+"</i>");
         });
        
    }
    //$("i").click(function (){
       
    //});
    
    // 
    // 
 // $(document).on('click',$("i"),function (){
        //$('i').parent().html("<input type='text' value='2' name='num'>");
        //$('input[name="num"]').focus();
   // })
</script>

111111111

222222222


333333333