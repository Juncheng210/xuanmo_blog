<!-- footer start -->
<footer>
  <div class="wrap">
    <div class="footer-top clearfix">
      <p class="fl introduce"><?php echo get_option('x_words'); ?></p>
      <div class="fr link">
        Link:<br />
        <?php echo get_option('x_links'); ?>
      </div>
    </div>
    <p class="copyright"><?php echo get_option('x_copyright'); ?>
      <script src="https://s4.cnzz.com/z_stat.php?id=1260526121&web_id=1260526121" language="JavaScript"></script>
    </p>
  </div>
</footer>
<!-- footer end -->
<div class="iconfont icon-backtop"></div>
<script src="<?php bloginfo('template_url'); ?>/js/common.js"></script>
<script type="text/javascript">
  //xuanmomo.com Baidu tongji analytics
  var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
  document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fe4f9f13922648691dd3ce1a36c073884' type='text/javascript'%3E%3C/script%3E"));
</script>
<script><?php echo get_option('x_javascript'); ?></script>
</body>
</html>