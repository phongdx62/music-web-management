<script type="text/javascript">
  $(document).ready(function() {
      $('#vn').click(function(e) {
          e.preventDefault();
          $('#topten').load('public/library/topten_vn.php');
      });
  });
</script>