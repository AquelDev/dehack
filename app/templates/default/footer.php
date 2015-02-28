   <div class="footer">
    <div>
     <strong>&copy; 2015 Dehack</strong>
    </div>
   </div>
  </div>
  <script src="/app/templates/default/assets/js/jquery-2.1.1.js"></script>
  <script src="/app/templates/default/assets/js/bootstrap.min.js"></script>
  <script src="/app/templates/default/assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
  <script src="/app/templates/default/assets/js/plugins/peity/jquery.peity.min.js"></script>
  <script src="/app/templates/default/assets/js/demo/peity-demo.js"></script>
  <script src="/app/templates/default/assets/js/inspinia.js"></script>
  <script src="/app/templates/default/assets/js/plugins/pace/pace.min.js"></script>
  <script src="/app/templates/default/assets/js/jquery.terminal.js"></script>
  <script src="/app/templates/default/assets/js/jquery.mousewheel.js"></script>
  <script>
  jQuery(function($, undefined) {
    $('#term_demo').terminal(function(command, term) {
        if (command !== '') {
            try {
                var result = window.eval(command);
                alert(result);
                if (result !== undefined) {
                    term.echo(new String(result));
                }
            } catch(e) {
                term.error(new String(e));
            }
        } else {
           term.echo('');
        }
    }, {
        greetings: 'Welcome to the terminal.',
        name: 'js_demo',
        height: 200,
        prompt: '$<?php echo strtolower($data['user']->getUsername());?>@<?php echo $data['user']->getIp();?>> '});
  });
  </script>
 </body>
</html>