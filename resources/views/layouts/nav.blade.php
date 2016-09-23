<li class="nav-small-cap m-t-10">--- @lang('main.mainmenu')</li>
<li> <a href="{{ route('home') }}" class="waves-effect {{ active('home') }}"><i data-icon="v" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">@lang('main.dashboard')</span></a> </li>

@role('administrator|observateur_regional')
<li>
    <a href="javascript:void(0)" class="waves-effect {{ active(['users.*','observateurs','observateurs-regional', 'observateurs-secteur']) }}"><i class="linea-icon linea-basic fa-fw icon-people"></i> <span class="hide-menu">@lang('main.users')<span class="fa arrow"></span></span></a>
    <ul class="nav nav-second-level">
        <li><a href="{{ route('users.create') }}"><i class="icon-plus fa-fw"></i> <span class="hide-menu">@lang('main.add_user')</span></a> </li>
        <li><a href="{{ route('observateurs') }}"><i data-icon="H" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">@lang('main.reg_obesrvateurs_regional')</span></a> </li>
        @role('administrator')
        <li><a href="{{ route('observateurs-regional') }}"><i data-icon="H" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">@lang('main.obesrvateurs_regional')</span></a> </li>
        <li><a href="{{ route('observateurs-secteur') }}"><i data-icon="H" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">@lang('main.obesrvateurs_secteur')</span></a> </li>
        @endrole
    </ul>
</li>
@endrole
<li>
    <a href="javascript:void(0)" class="waves-effect{{ active(['dossier.*','dossier.select']) }}"><i data-icon="O" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">@lang('main.files')<span class="fa arrow"></span><span class="label label-rouded label-purple pull-right">34</span></span></a>
    <ul class="nav nav-second-level">
        <li><a href="{{ route('dossier.index') }}"><i data-icon="@" class="linea-icon linea-elaborate fa-fw"></i> <span class="hide-menu">@lang('main.files_non_lus')</span></a> </li>
        <li><a href="{{ route('dossier.index') }}"><i data-icon="^" class="linea-icon linea-elaborate fa-fw"></i> <span class="hide-menu">@lang('main.files_important')</span></a> </li>
        <li><a href="{{ route('dossier.index') }}"><i data-icon="+" class="linea-icon linea-elaborate fa-fw"></i> <span class="hide-menu">@lang('main.files_region')</span></a> </li>
        <li><a href="{{ route('dossier.index') }}"><i data-icon="-" class="linea-icon linea-elaborate fa-fw"></i> <span class="hide-menu">@lang('main.myfiles')</span></a> </li>
        <li><a href="{{ route('dossier.select') }}"><i data-icon="<" class="linea-icon linea-elaborate fa-fw"></i> <span class="hide-menu">@lang('main.add_file')</span></a> </li>
    </ul>
</li>
<li> <a href="{{ route('stats') }}" class="waves-effect{{ active(['stats']) }}"><i data-icon="," class="linea-icon linea-elaborate  fa-fw"></i> <span class="hide-menu">@lang('main.stats')</span></a> </li>
<li> <a href="{{ route('societe.index') }}" class="waves-effect{{ active(['societe']) }}"><i data-icon="U" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">@lang('main.syndicats')</span></a> </li>
<li> <a href="{{ route('contacts') }}" class="waves-effect{{ active(['contacts']) }}"><i data-icon="&#xe006;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">@lang('main.contacts')</span></a> </li>
@role('administrator')
<li>
    <a href="javascript:void(0)" class="waves-effect {{ active(['admins','secteur.*','delegation.*','structure_syndicale.*','violation.*','move.*']) }}"><i data-icon="P" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">@lang('main.configuration')<span class="fa arrow"></span></span></a>
    <ul class="nav nav-second-level">
        <li><a href="{{ route('admins') }}"><i data-icon="V" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">@lang('main.aministrators')</span></a> </li>
        <li><a href="{{ route('secteur.index') }}"><i data-icon="&#xe028;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">@lang('main.secteurs')</span></a> </li>
        <li><a href="{{ route('delegation.index') }}"><i data-icon="Q" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">@lang('main.delegations')</span></a> </li>
        <li><a href="{{ route('structure_syndicale.index') }}"><i data-icon="U" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">@lang('main.structures_syndicales')</span></a> </li>
        <li><a href="{{ route('violation.index') }}"><i data-icon="L" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">@lang('violations.les_violations')</span></a> </li>
        <li><a href="{{ route('move.index') }}"><i data-icon="&#xe07d;" class="linea-icon linea-aerrow fa-fw"></i> <span class="hide-menu">@lang('main.moves')</span></a> </li>
    </ul>
</li>
@endrole
<li> <a href="{{ url('/logout') }}" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">@lang('main.logout')</span></a> </li>