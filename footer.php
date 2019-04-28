<!-- #footer on template, footer.php -->
<script>
  jQuery(".single-blog").each(function(index) {
      var hrefa = jQuery(this).find(".blog-post-details a");
      if(hrefa === undefined || hrefa.length < 1){
        return false;
      }
      if(hrefa[1] === undefined || hrefa[1].length < 1){
        return false;
      }
      console.log(hrefa[1]);

      var href = jQuery(hrefa[1]).attr("href");
      var inside = jQuery(this).html();
      jQuery(this).html('<a href="'+href+'">'+inside+'</a>');	  

    }
  );
</script>
