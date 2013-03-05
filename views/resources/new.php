<?php require_once ABSPATH . "wp-content/plugins/live_editor_files_wordpress/views/layouts/header.php" ?>

<div class="media-frame wp-core-ui">
  <?php require_once ABSPATH . "wp-content/plugins/live_editor_files_wordpress/views/layouts/global_navigation.php" ?>
  <div class="media-frame-title">
    <h1>
      <i class="live-editor icon"></i>
      New File
    </h1>
  </div>
  <div class="media-frame-router">
    <div class="media-router">
      <a href="#" class="media-menu-item active">Upload Files</a>
      <a href="#" class="media-menu-item">Open from URL</a>
    </div>
  </div>
  <div class="media-frame-content">
    <iframe
      src="<?php echo $this->api_url("/admin/resources/uploads/new?post_type=" . $params['post_type'] . "&amp;wp_source=" . urlencode($params['wp_source']) . "&amp;wp_nonce=" . urlencode(wp_create_nonce('editor_code')), true, "/wp/v1") ?>"
      width="100%"
      height="300"
    ></iframe>
  </div>

<?php require_once ABSPATH . "wp-content/plugins/live_editor_files_wordpress/views/layouts/footer.php" ?>
