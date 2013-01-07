<div class="chooseArea mb60 cf">
    
    <!-- free str -->
    <div class="boxTemp box01">
        <div class="title bgFree">{$smarty.const.NAME_LICENCE_FREE}</div>
        {include file="include/plan/free.inc"}
        <div class="btn">
            <span><a href="{if $is_auth}/console/{else}/auth/facebook{/if}"><img src="{$path}btn_choose_off.png" alt="Choose Plan" /></a></span>

        </div>
    </div>
    <!-- free end -->
    <!-- basic str -->
    <div class="boxTemp box02">
        <div class="title bgBlue">{$smarty.const.NAME_LICENCE_BASIC}</div>
        {include file="include/plan/basic.inc"}
        <div class="btn">
            <span><a href="/paypal/{if $debug}sandbox/{/if}basic"><img src="{$path}btn_choose_off.png" alt="Choose Plan"></a></span>
        </div>
    </div>
    <!-- basic end -->
    <!-- advance str -->
    <div class="boxTemp box03">
        <div class="title bgBlue">{$smarty.const.NAME_LICENCE_ADVANCE}</div>
        {include file="include/plan/advance.inc"}
        <div class="btn">
            <span><a href="/paypal/{if $debug}sandbox/{/if}advance"><img src="{$path}btn_choose_off.png" alt="Choose Plan" /></a></span>
        </div>
    </div>

    <!-- advance end -->
    <div class="iconPlus"><img src="{$path}icon_choose_01.png" alt="" /></div>
    <!-- plus str -->
    <div class="boxTemp width100 cf">
        <div class="title bgLightBlue">{$smarty.const.NAME_LICENCE_PLUS}</div>
        <div class="left">
            <div class="titlePlus">{$locale.plus_title}<span>{$locale.plus_cost}</span><em>/ {$locale.plus_per}</em></div>
            <ul class="check">
                <li>{$locale.plus_bestfor_1}</li>
                <li>{$locale.plus_bestfor_2}</li>
            </ul>
            <div class="btn">
                <span><img src="{$path}btn_choose_gray.png" alt="Choose Plan" /></span>
            </div>
        </div>
        <div class="right"><img src="{$path}comingsoon.png" alt="" /></div>
    </div>
    <!-- plus end -->
</div>