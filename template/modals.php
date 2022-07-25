<?php
$privacy_content = false;
$privacy = dirname(dirname(__FILE__)).'/'.$relative.'template/privacy.html';
if (file_exists($privacy)) {
    $privacy_content = file_get_contents($privacy);
}
$terms_content = false;
$terms = dirname(dirname(__FILE__)).'/'.$relative.'template/terms.html';
if (file_exists($terms)) {
    $terms_content = file_get_contents($terms);
}

if ($privacy_content || $terms_content) {
    ?>
<ul class="list-inline text-right m-0">
    <?php
    if ($privacy_content) {
        ?>
  <li class="list-inline-item">
    <a href="#" class="" data-toggle="modal" data-target="#privacyModal"><?php echo qrcdr()->getString('privacy'); ?></a>
  </li>
        <?php
    }
    if ($terms_content) {
        ?>
  <li class="list-inline-item">
    <a href="#" class="" data-toggle="modal" data-target="#termsModal"><?php echo qrcdr()->getString('terms_and_conditions'); ?></a>
  </li>
        <?php
    }
    ?>
</ul>
    <?php
}

if ($privacy_content) {
    ?>
  <div class="modal fade" id="privacyModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?php echo $privacy_content; ?>
        </div>
      </div>
    </div>
  </div>
    <?php
}
if ($terms_content) {
    ?>
  <div class="modal fade" id="termsModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?php echo $terms_content; ?>
        </div>
      </div>
    </div>
  </div>
    <?php
}
