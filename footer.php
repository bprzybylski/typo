  <!-- body -->
    <footer id="page-footer">
      <p>&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. Wszelkie prawa zastrzeżone.<br />Dumnie wspierane przez platformę <a href="http://wordpress.org">WordPress</a>.</p>
    </footer>
    <script src='//cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.1/MathJax.js?config=TeX-AMS-MML_HTMLorMML'></script>
    <script>
      MathJax.Hub.Config({
        tex2jax: {
          inlineMath: [['$','$'], ['\\(','\\)']],
          processEscapes: true,
          delayStartupUntil: onload
        },
        TeX: { equationNumbers: {autoNumber: "AMS"} }
      });
      $('body').on('DOMNodeInserted', function(e) {
          if ($(e.target).is('.qtip-content')) {
             MathJax.Hub.Queue(["Typeset",MathJax.Hub,e.target]);
          }
      });
    </script>
    <?php wp_footer(); ?>
  </body>
</html>
