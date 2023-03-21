<?php
/*
 * Template Name: Modal Dialogs
*/
get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#stellarpopup_six">
  Launch demo modal
</button>


<!-- Modal One-->
<div class="modal fade stellar-popup" id="stellarpopup_one">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="close-popup" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></div>
        <div class="modal-body">
            <div class="stellarpopup-content">
                <?php the_field('modal_one_content', 'options'); ?>
            </div>
            <div class="stellarpopup-button">
                <span id="agree_btn">I agree</span>
            </div>
        </div>
    </div>
  </div>
</div>

<!-- Modal Two-->
<div class="modal fade stellar-popup" id="stellarpopup_two">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="close-popup" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></div>
        <div class="modal-body">
            <div class="stellarpopup-content">
                <?php the_field('modal_two_content', 'options'); ?>
            </div>
            <div class="stellarpopup-button">
                <ul>
                    <li>
                        <span id="popno_btn">No</span>
                    </li>
                    <li>
                        <span id="popyes_btn">Yes</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
  </div>
</div>

<!-- Modal Three-->
<div class="modal fade stellar-popup" id="stellarpopup_three">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="close-popup" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></div>
        <div class="modal-body">
            <div class="stellarpopup-content">
                <?php the_field('modal_three_content', 'options'); ?>
            </div>
            <div class="stellarpopup-button">
                <ul>
                    <li>
                        <div class="checkbox">
                            <input type="checkbox" id="iunderstand" name="iunderstand" value="I Understand">
                            <label for="iunderstand">I understand</label>
                        </div>
                    </li>
                    <li>
                        <span id="popclose_btn">Close</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
  </div>
</div>

<!-- Modal Four-->
<div class="modal fade stellar-popup" id="stellarpopup_four">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="close-popup" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></div>
        <div class="modal-body">
            <div class="stellarpopup-content">
                <?php the_field('modal_four_content', 'options'); ?>
            </div>
            <div class="stellarpopup-button">
                <ul>
                    <li>
                        <div class="checkbox">
                            <input type="checkbox" id="agreeunderstand" name="agreeunderstand" value="Agree Understand">
                            <label for="agreeunderstand">I understand</label>
                        </div>
                    </li>
                    <li>
                        <span id="popiagreee_btn">I agree</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
  </div>
</div>

<!-- Modal Five-->
<div class="modal fade stellar-popup" id="stellarpopup_five">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="close-popup" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></div>
        <div class="modal-body">
            <div class="stellarpopup-content">
                <?php the_field('modal_five_content', 'options'); ?>
            </div>
            <div class="stellarpopup-button">
                <span id="stecomfirmed_btn">Comfirmed</span>
            </div>
        </div>
    </div>
  </div>
</div>

<!-- Modal Six-->
<div class="modal fade stellar-popup" id="stellarpopup_six">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="close-popup" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></div>
        <div class="modal-body">
            <div class="stellarpopup-content">
                <?php the_field('modal_six_content', 'options'); ?>
            </div>
            <div class="stellarpopup-button">
                <ul>
                    <li>
                        <span id="setdisagree_btn">Disagree</span>
                    </li>
                    <li>
                        <span id="setlagree_btn">Agree</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
  </div>
</div>

<style>
    .stellar-popup.show{
        background-color: rgba(0,0,0,0.7);
    }
    .stellar-popup .modal-dialog {
        max-width: 680px;
    }
    .stellar-popup .modal-content{
        background-color: #ffffff;
        border: none;
        border-radius: 0;
    }
    .stellar-popup .close-popup {
        width: 40px;
        height: 40px;
        margin: 0 0 0 auto;
        text-align: center;
        line-height: 40px;
        font-size: 20px;
        color: #C5DAD6;
        cursor: pointer;
    }
    .stellar-popup .modal-body {
        padding: 10px 90px 50px;
    }
    .stellarpopup-button {
        text-align: center;
        margin-top: 40px;
    }
    .stellarpopup-content h1,
    .stellarpopup-content h2,
    .stellarpopup-content h3,
    .stellarpopup-content h4,
    .stellarpopup-content h5,
    .stellarpopup-content h6{
        color: #103731;
        font-size: 60px;
        line-height: 56px;
        font-family: 'Cormorant Garamond';
        font-weight: 300;
        font-style: italic;
        text-transform: uppercase;
        margin: 0 0 30px 0;
        text-align: center;
    }
    .stellarpopup-content p{
        color: #103731;
        font-size: 20px;
        line-height: 23.46px;
        font-weight: 300;
        font-family: 'Work Sans';
        margin: 0 0 15px 0;
        text-align: left;
    }
    .stellarpopup-button span,
    .stellarpopup-button a{
        color: #103731;
        font-size: 16px;
        font-family: 'Work Sans';
        font-weight: 400;
        display: inline-block;
        transition: all 0.4s ease;
        cursor: pointer;
        border: 1px solid #EBB08F;
        padding: 9px 50px;
    }
    .stellarpopup-button span:hover,
    .stellarpopup-button a:hover{
        color: #ffffff;
        background-color: #EBB08F;
    }
    .stellarpopup-button ul{
        list-style: none;
        padding: 0;
        margin: 0 -7px;
        display: inline-block;
        width: 100%;
    }
    .stellarpopup-button ul li{
        float: left;
        width: 50%;
        padding: 0 7px;
    }
    .stellarpopup-button ul li span{
        width: 100%;
    }
    .stellarpopup-button ul li .checkbox {
        text-align: left;
        display: flex;
        margin-top: 9px;
    }
    .stellarpopup-button ul li label{
        color: #103731;
        font-size: 16px;
        font-family: 'Work Sans';
        font-weight: 400;
        cursor: pointer;
    }
    .stellarpopup-button ul li .checkbox input {
        cursor: pointer;
        height: 14px;
        width: 14px !important;
        margin-top: 5.3px;
        margin-right: 8px;
    }
</style>

<?php endwhile; endif; ?>
<?php get_footer(); ?>