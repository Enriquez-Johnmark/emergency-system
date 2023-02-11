<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
            
                <li class="menu-title mt-3"> <span>Main</span> </li>
                
                <?php if($_SESSION['roles'] == '3') : ?>
                    <li class="<?= ($activePage == 'user') ? 'active':''; ?>""> <a href="/user"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a> </li>
                    <li class="<?= ($activePage == 'my-reports') ? 'active':''; ?>""> <a href="/my-reports"><i class="fas fa-tachometer-alt"></i> <span>My Reports</span></a> </li>

                <?php endif; ?>
                
                <?php if($_SESSION['roles'] == '1' || $_SESSION['roles'] == '2') : ?>
                    <li class="<?= ($activePage == 'dashboard') ? 'active':''; ?>""> <a href="/dashboard"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a> </li>
                    
                    <li class="submenu">
                        <a href="#"><i class="fas fa-table"></i> <span> Incident Reports </span> <span class="menu-arrow"></span></a>
                        <ul class="submenu_class" style="display: none;">
                            <li><a class="<?= ($activePage == 'pending') ? 'active':''; ?>" href="/pending">Pending</a> </li>
                            <li><a class="<?= ($activePage == 'ongoing') ? 'active':''; ?>" href="/ongoing">Ongoing</a> </li>
                            <li><a class="<?= ($activePage == 'completed') ? 'active':''; ?>" href="/completed">Completed</a> </li>
                            <li><a class="" href="#">Add Incident</a> </li>

                        </ul>
                     </li>


                <?php endif; ?>
                <?php if($_SESSION['roles'] == '1') : ?>
                <li class="list-divider"></li>
                <li class="menu-title mt-3"> <span>Configuration</span> </li>
                <li class="<?= ($activePage == 'respondents') ? 'active':''; ?>"> <a href="/respondents"><i class="fas fa-cog"></i> <span>Respondents</span></a> </li>
                <li class="<?= ($activePage == 'respondent-types') ? 'active':''; ?>"> <a href="/respondent-types"><i class="fas fa-cog"></i> <span>Respondent Types</span></a> </li>
                <li class="<?= ($activePage == 'incident-types') ? 'active':''; ?>"> <a href="/incident-types"><i class="fas fa-cog"></i> <span>Incident Types</span></a> </li>
                <li class="<?= ($activePage == 'hotlines') ? 'active':''; ?>"> <a href="/hotlines"><i class="fas fa-cog"></i> <span>Hotlines</span></a> </li>

                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>