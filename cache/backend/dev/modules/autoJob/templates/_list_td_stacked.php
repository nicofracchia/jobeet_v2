<td colspan="6">
  <?php echo __('%%is_activated%% <small>%%category_id%%</small> - %%company%%(<em>%%email%%</em>) is looking for a %%position%% (%%location%%)', array('%%is_activated%%' => get_partial('job/list_field_boolean', array('value' => $JobeetJob->getIsActivated())), '%%category_id%%' => $JobeetJob->getCategoryId(), '%%company%%' => $JobeetJob->getCompany(), '%%email%%' => $JobeetJob->getEmail(), '%%position%%' => link_to($JobeetJob->getPosition(), 'jobeet_job_edit', $JobeetJob), '%%location%%' => $JobeetJob->getLocation()), 'messages') ?>
</td>
