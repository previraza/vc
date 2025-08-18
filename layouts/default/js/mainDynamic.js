(function ($) {
    "use strict";
  
    $(function () {
      $(
        "div#content .card.height-auto .heading-layout1 .dropdown .dropdown-menu.dropdown-menu-right a:nth-child(3)"
      ).click((e) => {
        console.log(e.target.innerText);
        if ((e.target.innerText = "Refresh")) location.reload();
      });
  
      /*-------------------------------------
                Data Table init
            -------------------------------------*/
      if ($.fn.DataTable !== undefined) {
        $(".data-table").DataTable({
          paging: true,
          retrieve: true,
          stateSave: true,
          info: true,
          lengthChange: true,
          lengthMenu: [20, 50, 75, 100, 500, 1000],
          columnDefs: [
            {
              targets: [0, -1], // column or columns numbers
              orderable: true, // set orderable for selected columns
            },
          ],
          dom: "Blfrtip",
          buttons: [
            {
              extend: "collection",
              text: "Exporter",
              buttons: ["copy", "csv", "excel", "pdf", "print"],
            },
            buttonActions(),
          ],
        });
      }
  
      /*-------------------------------------
                All Checkbox Checked
            -------------------------------------*/
      $(".checkAll").on("click", function () {
        $(this)
          .parents(".table")
          .find("input:checkbox")
          .prop("checked", this.checked);
      });
  
      /*-------------------------------------
                Tooltip init
            -------------------------------------*/
      $('[data-toggle="tooltip"]').tooltip();
  
      /*-------------------------------------
                Select 2 Init
            -------------------------------------*/
      if ($.fn.select2 !== undefined) {
        $(".select2").select2({
          width: "100%",
        });
  
        $("#s_sec").on("change", (e) => {
          var std = $("#s_opt").html("");
          $.ajax({
            url: "/app/settings/get/options.php",
            type: "POST",
            dataType: "json",
            data: {
              section: e.currentTarget.value,
            },
            success: function (res) {
              try {
                res.map(({ id, text }) => std.append(new Option(text, id)));
              } catch (error) {
                std.append(new Option(res.text, res.id));
              }
            },
          });
        });
        $("#s_sec,#s_opt,#s_level").on("change", (e) => {
          var a = $("#s_cla").html("");
          $.ajax({
            url: "/app/settings/get/classes.php",
            type: "POST",
            dataType: "json",
            data: {
              option: $("#s_opt").val(),
              promotion: $("#s_promo").val(),
              level: $("#s_level").val(),
            },
            success: function (r) {
              try {
                r.map(({ id, text }) => a.append(new Option(text, id)));
              } catch (error) {
                a.append(new Option(r.text, r.id));
              }
            },
          });
        });
      }
  
      /*-----------------------------------
              Execution d'une fonction
          ------------------------------------*/
      $("a[data-exec]").on("click", (e) => {
        e.preventDefault();
        Function(e.target.dataset.exec)();
      });
      $("table.dataTable tbody").on("change", () => {
        $("a[data-exec]").on("click", (e) => {
          e.preventDefault();
          Function(e.target.dataset.exec)();
        });
        $('input[type="number"]').on("click", (e) => {
          (tr = $(e.currentTarget).parents("tr")[0]),
            (allInput = tr.querySelectorAll("input[type=number]"));
          allTd = tr.querySelectorAll("td");
          allTd[5].innerText = mg =
            (parseFloat(allInput[0].value) + parseFloat(allInput[1].value)) / 2;
          allTd[8].innerText =
            (tg = (mg + parseFloat(allInput[2].value)) / 2) < 10 &&
            parseFloat(allInput[3].value) != 0
              ? parseFloat(allInput[3].value)
              : tg;
        });
      });
  
      /*-------------------------------------
                  Date Picker
          -------------------------------------*/
  
      if ($.fn.datepicker !== undefined) {
        $(".air-datepicker").datepicker({
          language: {
            days: [
              "Sunday",
              "Monday",
              "Tuesday",
              "Wednesday",
              "Thursday",
              "Friday",
              "Saturday",
            ],
            daysShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            daysMin: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"],
            months: [
              "January",
              "February",
              "March",
              "April",
              "May",
              "June",
              "July",
              "August",
              "September",
              "October",
              "November",
              "December",
            ],
            monthsShort: [
              "Jan",
              "Feb",
              "Mar",
              "Apr",
              "May",
              "Jun",
              "Jul",
              "Aug",
              "Sep",
              "Oct",
              "Nov",
              "Dec",
            ],
            today: "Today",
            clear: "Clear",
            dateFormat: "yyyy/mm/dd",
            firstDay: 0,
          },
        });
      }
  
      /*-------------------------------------
                Counter
            -------------------------------------*/
      var counterContainer = $(".counter");
      if (counterContainer.length) {
        counterContainer.counterUp({
          delay: 50,
          time: 1000,
        });
      }
  
      /*-------------------------------------
                Vector Map 
            -------------------------------------*/
      if ($.fn.vectorMap !== undefined) {
        $("#world-map").vectorMap({
          map: "world_mill",
          zoomButtons: false,
          backgroundColor: "transparent",
  
          regionStyle: {
            initial: {
              fill: "#0070ba",
            },
          },
          focusOn: {
            x: 0,
            y: 0,
            scale: 1,
          },
          series: {
            regions: [
              {
                values: {
                  CA: "#41dfce",
                  RU: "#f50056",
                  US: "#f50056",
                  IT: "#f50056",
                  AU: "#fbd348",
                },
              },
            ],
          },
        });
      }
  
      /*-------------------------------------
                Line Chart 
            -------------------------------------*/
      let earChart = $("#earning-line-chart");
      if (earChart.length) {
        var lineChartData = {
            labels: [
              "",
              "Jan",
              "Fev",
              "Mar",
              "Avr",
              "Mai",
              "Jui",
              "Jui",
              "Aûo",
              "Sep",
              "Oct",
              "Nov",
              "Dec",
              "",
            ],
            datasets: [
              {
                data: earChart
                  .attr("chart-data-1")
                  .split("|")
                  .map((e) => parseInt(e)),
                borderColor: "#00ff00",
                borderWidth: 3,
                pointRadius: 0,
                pointBackgroundColor: "#00ff00",
                pointBorderColor: "#ffffff",
                pointHoverRadius: 6,
                pointHoverBorderWidth: 3,
                fill: "origin",
                label: "Total Collection",
              },
              {
                data: earChart
                  .attr("chart-data-2")
                  .split("|")
                  .map((e) => parseInt(e)),
                borderColor: "#ff0000",
                borderWidth: 3,
                pointRadius: 0,
                pointBackgroundColor: "#ff0000",
                pointBorderColor: "#ffffff",
                pointHoverRadius: 6,
                pointHoverBorderWidth: 3,
                fill: "origin",
                label: "Total Collection",
              },
              // {
              //     data: [3e4, 6e4, 7e4, 5e4, 5e4, 9e4, 8e4],
              //     borderColor: '#417dfc',
              //     borderWidth: 3,
              //     pointRadius: 0,
              //     pointBackgroundColor: '#304ffe',
              //     pointBorderColor: '#ffffff',
              //     pointHoverRadius: 6,
              //     pointHoverBorderWidth: 3,
              //     fill: 'origin',
              //     label: "Fees Collection"
              // }
            ],
          },
          lineChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            animation: {
              duration: 2000,
            },
            scales: {
              xAxes: [
                {
                  display: true,
                  ticks: {
                    display: true,
                    fontColor: "#222222",
                    fontSize: 16,
                    padding: 20,
                  },
                  gridLines: {
                    display: true,
                    drawBorder: true,
                    color: "#cccccc",
                    borderDash: [5, 5],
                  },
                },
              ],
              yAxes: [
                {
                  display: true,
                  ticks: {
                    display: true,
                    autoSkip: true,
                    maxRotation: 0,
                    fontColor: "#646464",
                    fontSize: 16,
                    padding: 20,
                    callback: function (value) {
                      var ranges = [
                        {
                          divider: 1e6,
                          suffix: "M",
                        },
                        {
                          divider: 1e3,
                          suffix: "k",
                        },
                      ];
  
                      function formatNumber(n) {
                        for (var i = 0; i < ranges.length; i++) {
                          if (n >= ranges[i].divider) {
                            return (
                              (n / ranges[i].divider).toString() +
                              ranges[i].suffix
                            );
                          }
                        }
                        return n;
                      }
                      return formatNumber(value);
                    },
                  },
                  gridLines: {
                    display: true,
                    drawBorder: false,
                    color: "#cccccc",
                    borderDash: [5, 5],
                    zeroLineBorderDash: [5, 5],
                  },
                },
              ],
            },
            legend: {
              display: false,
            },
            tooltips: {
              mode: "index",
              intersect: false,
              enabled: true,
            },
            elements: {
              line: {
                tension: 0.35,
              },
              point: {
                pointStyle: "circle",
              },
            },
          },
          earningCanvas = earChart.get(0).getContext("2d"),
          earningChart = new Chart(earningCanvas, {
            type: "line",
            data: lineChartData,
            options: lineChartOptions,
          });
      }
  
      /*-------------------------------------
                Bar Chart 
            -------------------------------------*/
      let exChart = $("#expense-bar-chart");
      if (exChart.length) {
        var barChartData = {
          labels: exChart.attr("chart-labels").split("|"),
          datasets: [
            {
              backgroundColor: exChart.attr("chart-bgColor").split("|"),
              data: exChart
                .attr("chart-values")
                .split("|")
                .map((e) => parseInt(e)),
              label: exChart.attr("chart-label"),
            },
          ],
        };
        var barChartOptions = {
          responsive: true,
          maintainAspectRatio: false,
          animation: {
            duration: 2000,
          },
          scales: {
            xAxes: [
              {
                display: false,
                maxBarThickness: 100,
                ticks: {
                  display: false,
                  padding: 0,
                  fontColor: "#646464",
                  fontSize: 14,
                },
                gridLines: {
                  display: true,
                  color: "#e1e1e1",
                },
              },
            ],
            yAxes: [
              {
                display: true,
                ticks: {
                  display: true,
                  autoSkip: false,
                  fontColor: "#646464",
                  fontSize: 14,
                  padding: 10,
                  beginAtZero: true,
                  callback: function (value) {
                    var ranges = [
                      {
                        divider: 1e6,
                        suffix: "M",
                      },
                      {
                        divider: 1e3,
                        suffix: "k",
                      },
                    ];
  
                    function formatNumber(n) {
                      for (var i = 0; i < ranges.length; i++) {
                        if (n >= ranges[i].divider) {
                          return (
                            (n / ranges[i].divider).toString() + ranges[i].suffix
                          );
                        }
                      }
                      return n;
                    }
                    return formatNumber(value);
                  },
                },
                gridLines: {
                  display: true,
                  drawBorder: true,
                  color: "#e1e1e1",
                  zeroLineColor: "#e1e1e1",
                },
              },
            ],
          },
          legend: {
            display: false,
          },
          tooltips: {
            enabled: true,
          },
          elements: {},
        };
        var expenseCanvas = $("#expense-bar-chart").get(0).getContext("2d");
        var expenseChart = new Chart(expenseCanvas, {
          type: "bar",
          data: barChartData,
          options: barChartOptions,
        });
      }
  
      /*-------------------------------------
                Doughnut Chart 
            -------------------------------------*/
      let stdChart = $("#student-doughnut-chart");
      if (stdChart.length) {
        var doughnutChartData = {
          labels: stdChart.attr("chart-labels").split("|"),
          datasets: [
            {
              backgroundColor: stdChart.attr("chart-bgColor").split("|"),
              data: stdChart
                .attr("chart-values")
                .split("|")
                .map((e) => parseInt(e)),
              label: stdChart.attr("chart-label"),
            },
          ],
        };
        var doughnutChartOptions = {
          responsive: true,
          maintainAspectRatio: false,
          cutoutPercentage: 65,
          rotation: -9.4,
          animation: {
            duration: 2000,
          },
          legend: {
            display: false,
          },
          tooltips: {
            enabled: true,
          },
        };
        var studentCanvas = stdChart.get(0).getContext("2d");
        var studentChart = new Chart(studentCanvas, {
          type: "doughnut",
          data: doughnutChartData,
          options: doughnutChartOptions,
        });
      }
  
      /*-------------------------------------
                Calender initiate 
            -------------------------------------*/
      if ($.fn.fullCalendar !== undefined) {
        $("#fc-calender").fullCalendar({
          header: {
            center: "basicDay,basicWeek,month",
            left: "title",
            right: "prev,next",
          },
          fixedWeekCount: false,
          navLinks: true, // can click day/week names to navigate views
          editable: true,
          eventLimit: true, // allow "more" link when too many events
          aspectRatio: 1.8,
          events: [
            {
              title: "All Day Event",
              start: "2019-04-01",
            },
            {
              title: "Meeting",
              start: "2019-04-12T14:30:00",
            },
            {
              title: "Happy Hour",
              start: "2019-04-15T17:30:00",
            },
            {
              title: "Birthday Party",
              start: "2019-04-20T07:00:00",
            },
          ],
        });
      }
    });
  
    $("a", this).on("click", function (e) {
      if (this.dataset.action !== undefined) {
        switch (this.dataset.action) {
          case "null":
            // e.preventDefault();
            break;
          case "print":
            e.preventDefault();
            printer($(this).parents(".card").parent()[0]);
            break;
          case "reload":
            $.dynamicLinkReload();
            break;
          case "changePass":
            __changePass();
            break;
          default:
            alert("L'action \"" + this.dataset.action + "\" n'est pas défini !");
            break;
        }
      }
    });
    $('input[aria-controls="DataTables_Table_9"]').addClass("formControl");
  })(jQuery);
  
  document.querySelectorAll("[download-btn]").forEach(function (e1) {
    e1.onclick = function () {
      domtoimage
        .toBlob(document.getElementById(e1.attributes["download-block"].value))
        .then(function (blob) {
          window.saveAs(blob, "Profile.webp");
        });
    };
  });
  $(document).dynamicLink({
    contenair: "#content",
    before: (element) => {
      $("#contain > div.dashboard-content-one.position-relative").addClass(
        "showLoader"
      );
    },
    after: (element, response) => {
      $("#contain > div.dashboard-content-one.position-relative").removeClass(
        "showLoader"
      );
      $.getScript("/layouts/default/js/mainDynamic.js");
      var r = JSON.parse(response),
        breadcrumbs = $("#breadcrumbs"),
        href = "?b557c222c8ddcdf87e033706aad08e4ef7cf90d3=";
      $("#breadcrumbs").html('<li><a href="/app/?">Home</a></li>');
      for (let i = 0; i < r.links.length; i++) {
        var li = document.createElement("li"),
          a = document.createElement("a");
        if (i + 1 !== r.links.length) a.href = href += r.links[i];
        a.innerText = r.links[i];
        li.appendChild(a);
        breadcrumbs.append(li);
        href += "--";
      }
      $("#breadcrumbs-h").text(r.title);
    },
  });
  JsBarcode(".barcode").init();
  $("[data-qrcode]").each((i, qr) => {
    window.el = qr;
    new QRCode(qr, {
      text:
        (isLink(qr.dataset.qrcode) ? "" : location.origin) + qr.dataset.qrcode,
      width: qr.dataset.width || 125,
      height: qr.dataset.height || 125,
      colorDark: "#000",
      colorLight: "#fff",
      correctLevel: QRCode.CorrectLevel.H,
    });
  });
  function isLink(str) {
    const regex = /^(http|https):\/\/[^ "]+$/;
    return regex.test(str);
  }
  
  function darkMode(state = "dark") {
    sessionStorage.setItem("theme", state);
    loadThemeMode();
  }
  
  function loadThemeMode() {
    document.body.classList.remove("theme-dark");
    document.body.classList.remove("theme-light");
    document.body.classList.add(
      "theme-" + (sessionStorage.getItem("theme") ?? "light")
    );
  }
  loadThemeMode();
  