<?php
    $o = $this->optionTag(null, _("Select target folder:")) .
         $this->optionTag(null, '- - - - - - - - - -', false, array('disabled' => true));

    if ($this->create) {
        $o .= $this->optionTag(null, _("Create new folder"), false, array('class' => 'flistCreate')) .
              $this->optionTag(null, '- - - - - - - - - -', false, array('disabled' => true));
    }

    foreach ($this->mboxes as $v) {
        $o .= $this->optionTag($v['ob'], $this->escape(str_repeat(' ', $val['level'] * 2) . $val['label']), $val['ob'] == $this->val);
    }

    echo $this->selectTag($this->tagname, $o, array('class' => 'flistSelect'));
