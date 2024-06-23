<?php

use EvolutionCMS\Facades\ManagerTheme;
use Illuminate\Support\Facades\Lang;

?>
@extends('manager::template.page')
@section('content')
    @php
        // initialize page view state - the $_PAGE object
        evo()->getManagerApi()->initPageViewState();
        $_PAGE = [
            'vs' => [],
        ];

        // get and save search string
        if (get_by_key($_REQUEST, 'op') === 'reset') {
            $sqlQuery = $query = '';
            $_PAGE['vs']['search'] = '';
        } else {
            $sqlQuery = $query = isset($_REQUEST['search']) ? $_REQUEST['search'] : get_by_key($_PAGE, 'vs.search');
            if (!is_numeric($sqlQuery)) {
                $sqlQuery = $query;
            }
            $_PAGE['vs']['search'] = $query;
        }

        // get & save listmode
        $listmode = isset($_REQUEST['listmode']) ? $_REQUEST['listmode'] : get_by_key($_PAGE, 'vs.lm');
        $_PAGE['vs']['lm'] = $listmode;

        // context menu
        $cm = new \EvolutionCMS\Support\ContextMenu('cntxm', 150);
        $cm->addItem(__('global.view_log'), 'js:menuAction(1)', ManagerTheme::getStyle('icon_eye'));
        //$cm->addSeparator();
        $cm->addItem(__('global.delete'), 'js:menuAction(2)', ManagerTheme::getStyle('icon_trash'), !evo()->hasPermission('delete_eventlog') ? 1 : 0);
        $contextmenu = $cm->render();
    @endphp
    @push('scripts.top')
        {!! $contextmenu !!}
        <script>
          function searchResource () {
            document.resource.op.value = 'srch';
            document.resource.submit();
          };

          function resetSearch () {
            document.resource.search.value = '';
            document.resource.op.value = 'reset';
            document.resource.submit();
          };

          function changeListMode () {
            var m = parseInt(document.resource.listmode.value) ? 1 : 0;
            if (m) {
              document.resource.listmode.value = 0;
            } else {
              document.resource.listmode.value = 1;
            }
            document.resource.submit();
          };

          var selectedItem;
          var contextm = {!! $cm->getClientScriptObject() !!};

          function showContentMenu (id, e) {
            selectedItem = id;
            contextm.style.left = (e.pageX ||
              (e.clientX + (document.documentElement.scrollLeft || document.body.scrollLeft))) + 'px';
            contextm.style.top = (e.pageY ||
              (e.clientY + (document.documentElement.scrollTop || document.body.scrollTop))) + 'px';
            contextm.style.visibility = 'visible';
            e.cancelBubble = true;
            return false;
          };

          function menuAction (a) {
            var id = selectedItem;
            switch (a) {
              case 1: // view log details
                window.location.href = 'index.php?a=115&id=' + id;
                break;
              case 2: // clear log
                window.location.href = 'index.php?a=116&id=' + id;
                break;
            }
          }

          document.addEventListener('click', function () {
            contextm.style.visibility = 'hidden';
          });

          document.addEventListener('DOMContentLoaded', function () {
            var h1help = document.querySelector('h1 > .help');
            h1help.onclick = function () {
              document.querySelector('.element-edit-message').classList.toggle('show');
            };
          });
        </script>
    @endpush

    <form name="resource" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ get_by_key($_REQUEST, 'id') }}"/>
        <input type="hidden" name="listmode" value="{{ $listmode }}"/>
        <input type="hidden" name="op" value=""/>

        <h1>
            <i class="{{ ManagerTheme::getStyle('icon_info_triangle') }}"></i>{{ __('global.eventlog_viewer') }}
            <i
                    class="{{ ManagerTheme::getStyle('icon_question_circle') }} help"></i>
        </h1>

        <div class="container element-edit-message">
            <div class="alert alert-info">{{ __('global.eventlog_msg') }}</div>
        </div>

        <div class="tab-page">
            <!-- load modules -->
            <div class="container container-body">
                <div class="row searchbar form-group">
                    <div class="col-sm-6 input-group">
                        <div class="input-group-btn">
                            <a class="btn btn-danger btn-sm" href="index.php?a=116&cls=1"><i
                                        class="{{ ManagerTheme::getStyle('icon_trash') }}"></i> {{ __('global.clear_log') }}
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 ">
                        <div class="input-group float-right w-auto">
                            <input class="form-control form-control-sm" name="search" type="text" value="<?= $query ?>"
                                   placeholder="{{ __('global.search') }}"/>
                            <div class="input-group-append">
                                <a class="btn btn-secondary btn-sm" href="javascript:;"
                                   title="{{ __('global.search') }}"
                                   onclick="searchResource();return false;"><i
                                            class="{{ ManagerTheme::getStyle('icon_search') }}"></i></a>
                                <a class="btn btn-secondary btn-sm" href="javascript:;"
                                   title="{{ __('global.reset') }}"
                                   onclick="resetSearch();return false;"><i
                                            class="{{ ManagerTheme::getStyle('icon_refresh') }}"></i></a>
                                <a class="btn btn-secondary btn-sm" href="javascript:;"
                                   title="{{ __('global.list_mode') }}"
                                   onclick="changeListMode();return false;"><i
                                            class="{{ ManagerTheme::getStyle('icon_table') }}"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="table-responsive">
                        <?php
                        $eventLog = \EvolutionCMS\Models\EventLog::query()
                            ->select(
                                'event_log.id',
                                'event_log.type as icon',
                                'event_log.createdon',
                                'event_log.source',
                                'event_log.eventid',
                                'users.username as username'
                            )
                            ->leftJoin('users', function ($join) {
                                $join->on('users.id', '=', 'event_log.user');
                            })
                            ->orderBy('createdon', 'DESC');

                        if ($sqlQuery != '') {
                            if (is_numeric($sqlQuery)) {
                                $eventLog = $eventLog->where('eventid', $sqlQuery);
                            } else {
                                $eventLog = $eventLog->where(function ($q) use ($sqlQuery) {
                                    $q->where('event_log.source', 'LIKE', '%' . $sqlQuery . '%')->orWhere(
                                        'event_log.description',
                                        'LIKE',
                                        '%' . $sqlQuery . '%'
                                    );
                                });
                            }
                        }
                        $grd = new \EvolutionCMS\Support\DataGrid(
                            '', $eventLog, 100
                        ); // set page size to 0 t show all items
                        $grd->pagerClass = '';
                        $grd->pagerStyle = 'white-space: normal;';
                        $grd->pageClass = 'page-item';
                        $grd->selPageClass = 'page-item active';
                        $grd->prepareResult = [
                            'icon' => [
                                1 => 'text-info ' . ManagerTheme::getStyle('icon_info_circle'),
                                2 => 'text-warning ' . ManagerTheme::getStyle('icon_info_triangle'),
                                3 => 'text-danger ' . ManagerTheme::getStyle('icon_cancel')
                            ]
                        ];
                        $grd->noRecordMsg = __('global.no_records_found');
                        $grd->cssClass = 'table data nowrap';
                        $grd->columnHeaderClass = 'tableHeader';
                        $grd->itemClass = 'tableItem';
                        $grd->altItemClass = 'tableAltItem';
                        $grd->fields = 'type,source,createdon,eventid,username';
                        $grd->columns = __('global.type') . ' ,' . __('global.source') . ' ,' .
                            __('global.date') . ' ,' . __('global.event_id') . ' ,' .
                            __('global.sysinfo_userid');
                        $grd->colWidths = '1%,,1%,1%,1%';
                        $grd->colAligns = 'center,,,center,center';
                        $grd->colTypes =
                            "template:<a class='gridRowIcon' href='javascript:;' onclick='return showContentMenu([+id+],event);' title='" .
                            __('global.click_to_context') .
                            "'><i class='[+icon+]'></i></a>||template:<a href='index.php?a=115&id=[+id+]' title='" .
                            __('global.click_to_view_details') . "'>[+source+]</a>||date: " .
                            evo()->toDateFormat(null, 'formatOnly') . ' H:i:s';
                        if ($listmode == '1') {
                            $grd->pageSize = 0;
                        }
                        if (get_by_key($_REQUEST, 'op') === 'reset') {
                            $grd->pageNumber = 1;
                        }
                        // render grid
                        echo $grd->render();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
