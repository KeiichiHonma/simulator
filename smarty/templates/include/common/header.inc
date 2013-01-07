<div id="header">
    <div class="inner01 cf">
        <div class="logo"><a href="/">popApps</a></div>
        <div class="nav">
            <ul class="cf">
                {include file="include/common/signin.inc"}
                <li class="head"> | </li>
                <li class="head"><a href="/">{$locale.g_home}</a></li>
                <li><a href="/demo">{$locale.g_demo}</a></li>
                <li><a href="{if !$index}/{/if}#a_features">{$locale.g_feature}</a></li>
                <li><a href="{if !$index}/{/if}#a_plans">{$locale.g_plans}</a></li>
                <li><a href="{if !$index}/{/if}#a_faq">{$locale.g_faq}</a></li>
                
            </ul>
        </div>
    </div>
</div>