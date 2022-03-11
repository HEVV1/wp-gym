<aside class="page-sidebar text-cener">
  <div class="page-slidebar-wrapper-text mb-2 mb-md-5">
    <h1 class="styled-as-h1 color-primary"> Read Our Blog Post </h1>
  </div>
  <?php
    if (is_active_sidebar('sidebar')) {
      dynamic_sidebar('sidebar');
    }
  ?>
</aside>