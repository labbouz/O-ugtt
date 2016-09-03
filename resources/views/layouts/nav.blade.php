<li class="nav-small-cap m-t-10">--- @lang('main.mainmenu')</li>
<li> <a href="javascript:void(0)" class="waves-effect active"><i data-icon="v" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">@lang('main.dashboard')</span></a> </li>
<li>
    <a href="javascript:void(0)" class="waves-effect"><i class="linea-icon linea-basic fa-fw icon-people"></i> <span class="hide-menu">@lang('main.users')<span class="fa arrow"></span></span></a>
    <ul class="nav nav-second-level">
        <li><a href="javascript:void(0)">@lang('main.add_user')</a></li>
        <li><a href="javascript:void(0)">@lang('main.res_obesrvateurs_regional')</a></li>
        <li><a href="javascript:void(0)">@lang('main.obesrvateurs_regional')</a></li>
        <li><a href="javascript:void(0)">@lang('main.obesrvateurs_secteur')</a></li>
    </ul>
</li>
<li> <a href="javascript:void(0)" class="waves-effect"><i data-icon="&#xe028;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">@lang('main.secteurs')</span></a> </li>
<li>
    <a href="javascript:void(0)" class="waves-effect"><i data-icon="O" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">@lang('main.files')<span class="fa arrow"></span><span class="label label-rouded label-purple pull-right">34</span></span></a>
    <ul class="nav nav-second-level">
        <li><a href="javascript:void(0)">@lang('main.files_non_lus')</a></li>
        <li><a href="javascript:void(0)">@lang('main.files_important')</a></li>
        <li><a href="javascript:void(0)">@lang('main.files_region')</a></li>
        <li><a href="javascript:void(0)">@lang('main.myfiles')</a></li>
        <li><a href="javascript:void(0)">@lang('main.add_file')</a></li>
    </ul>
</li>
<li> <a href="javascript:void(0)" class="waves-effect"><i data-icon="," class="linea-icon linea-elaborate  fa-fw"></i> <span class="hide-menu">@lang('main.stats')</span></a> </li>
<li> <a href="{{ url('/logout') }}" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">@lang('main.logout')</span></a> </li>
