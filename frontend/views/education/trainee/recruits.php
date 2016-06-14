<?php

$this->title = '实习生招募';
$this->params=[
    "breadcrumbs"=>[
        [
            'label' => '艺术教育',
            'url' => ['education/index']
            //'template' => "<li><b>{link}</b></li>\n", // template for this link only
        ],
        [
            'label' => '实习生',
            'url' => ['education/trainee']
        ],
        [
            'label' => '实习生招募'
        ]
    ]
]
?>
<div class="section">
    <h2 class="sectionTitle titleTraineeRecruit">实习生招聘</h2>
    <ul class="list4">
        <?php
            foreach($results as $r){
                $date=$r->date;
                $year=substr($date,0,4);
                $month=substr($date,5);
                ?>
                <li class="item">
                    <div class="leftCorner">
                        <span class="arrow"></span>
                        <p class="text"><?= $year; ?><br><?= $month; ?></p>
                    </div>
                    <table cellspacing="0">
                        <tr>
                            <td>实习岗位</td>
                            <td><?= $r->job; ?></td>
                        </tr>
                        <tr>
                            <td>职位要求</td>
                            <td><?= $r->job_require; ?></td>
                        </tr>
                        <tr>
                            <td>实习要求</td>
                            <td><?= $r->internship_require; ?></td>
                        </tr>
                        <tr>
                            <td>实习地点</td>
                            <td><?= $r->address; ?></td>
                        </tr>
                    </table>
                </li>
                <?php
            }
        ?>
    </ul>
</div>