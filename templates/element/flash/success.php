<?php
/**
 * @var \App\View\AppView $this
 * @var array $params
 * @var string $message
 */
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="alert alert-dismissible alert-success" onclick="this.classList.add('hidden')"><button class="close" type="button" data-dismiss="alert">×</button><?= $message ?></div>