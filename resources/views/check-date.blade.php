@extends('layout')

@push('pre-style')
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js'></script>
    <script>

        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth'
            });
            calendar.render();
        });

    </script>
@endpush

@push('post-style')
    <style>
        body {
            margin-top: 40px;
        }

        .stepwizard-step p {
            margin-top: 10px;
        }

        .stepwizard-row {
            display: table-row;
        }

        .stepwizard {
            display: table;
            width: 100%;
            position: relative;
        }

        .stepwizard-step button[disabled] {
            opacity: 1 !important;
            filter: alpha(opacity=100) !important;
        }

        .stepwizard-row:before {
            top: 14px;
            bottom: 0;
            position: absolute;
            content: " ";
            width: 100%;
            height: 1px;
            background-color: #ccc;
            z-order: 0;
        }

        .stepwizard-step {
            display: table-cell;
            text-align: center;
            position: relative;
        }

        .btn-circle {
            width: 30px;
            height: 30px;
            text-align: center;
            padding: 6px 0;
            font-size: 12px;
            line-height: 1.428571429;
            border-radius: 15px;
        }
    </style>
@endpush

@push('body')
    <section>
        <div class="container">
            <div class="stepwizard mt-5">
                <div class="stepwizard-row setup-panel">
                    <div class="stepwizard-step">
                        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                        <p>Pilih Tanggal</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                        <p>Pesan</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                        <p>Selesai</p>
                    </div>
                </div>
            </div>

            <div class="container mt-5">
                <div id='calendar'></div>
            </div>

            <div class="container mt-5 pb-5">
                <div class="border border-black border-1 rounded-3">
                    <p class="fs-5 py-3 bg-primary-color text-white rounded-top-3 px-2">23 November 2023</p>
                   <div class="container rounded-2">
                       <table class="table rounded-2 table-bordered">
                           <thead>
                           <tr>
                               <th scope="col">Jam</th>
                               <th scope="col">Kegiatan</th>
                           </tr>
                           </thead>
                           <tbody class="table-group-divider">
                           <tr>
                               <td>18.00 - 22.00</td>
                               <td>Hackathon Challenge</td>
                           </tr>
                           <tr>
                               <td>-</td>
                               <td>-</td>
                           </tr>
                           <tr>
                               <td>-</td>
                               <td>-</td>
                           </tr>
                           <tr>
                               <td>-</td>
                               <td>-</td>
                           </tr>
                           <tr>
                               <td>-</td>
                               <td>-</td>
                           </tr>
                           <tr>
                               <td>-</td>
                               <td>-</td>
                           </tr>

                           </tbody>
                       </table>
                   </div>

                </div>
            </div>
            <div class="row mb-5">
                <div class="container text-center">
                    <button type="button" class="py-3 px-3 border-0 btn-lg px-5 bg-primary-color text-white"
                            style="border-radius: 64px">Pilih Tanggal
                    </button>
                </div>
            </div>
            <div style="height: 20vh">
            </div>

        </div>
    </section>
@endpush

@push('post-script')
    <script>
        $(document).ready(function () {
            var navListItems = $('div.setup-panel div a'),
                allWells = $('.setup-content'),
                allNextBtn = $('.nextBtn'),
                allPrevBtn = $('.prevBtn');

            allWells.hide();

            navListItems.click(function (e) {
                e.preventDefault();
                var $target = $($(this).attr('href')),
                    $item = $(this);

                if (!$item.hasClass('disabled')) {
                    navListItems.removeClass('btn-primary').addClass('btn-default');
                    $item.addClass('btn-primary');
                    allWells.hide();
                    $target.show();
                    $target.find('input:eq(0)').focus();
                }
            });

            allPrevBtn.click(function () {
                var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    prevStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a");

                prevStepWizard.removeAttr('disabled').trigger('click');
            });

            allNextBtn.click(function () {
                var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                    curInputs = curStep.find("input[type='text'],input[type='url']"),
                    isValid = true;

                $(".form-group").removeClass("has-error");
                for (var i = 0; i < curInputs.length; i++) {
                    if (!curInputs[i].validity.valid) {
                        isValid = false;
                        $(curInputs[i]).closest(".form-group").addClass("has-error");
                    }
                }

                if (isValid)
                    nextStepWizard.removeAttr('disabled').trigger('click');
            });

            $('div.setup-panel div a.btn-primary').trigger('click');
        });
    </script>
@endpush
