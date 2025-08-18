(function ($) {
    "use strict";
  
    sessionStorage.hideMenu ? $("#wrapper").addClass("sidebar-collapsed") : null;
  
    /*-------------------------------------
          Sidebar Toggle Menu
        -------------------------------------*/
    $(".sidebar-toggle-view").on(
      "click",
      ".sidebar-nav-item .nav-link",
      function (e) {
        if (!$(this).parents("#wrapper").hasClass("sidebar-collapsed")) {
          var animationSpeed = 300,
            subMenuSelector = ".sub-group-menu",
            $this = $(this),
            checkElement = $this.next();
          if (checkElement.is(subMenuSelector) && checkElement.is(":visible")) {
            checkElement.slideUp(animationSpeed, function () {
              checkElement.removeClass("menu-open");
            });
            checkElement.parent(".sidebar-nav-item").removeClass("active");
          } else if (
            checkElement.is(subMenuSelector) &&
            !checkElement.is(":visible")
          ) {
            var parent = $this.parents("ul").first();
            var ul = parent.find("ul:visible").slideUp(animationSpeed);
            ul.removeClass("menu-open");
            var parent_li = $this.parent("li");
            checkElement.slideDown(animationSpeed, function () {
              checkElement.addClass("menu-open");
              parent.find(".sidebar-nav-item.active").removeClass("active");
              parent_li.addClass("active");
            });
          }
          if (checkElement.is(subMenuSelector)) {
            e.preventDefault();
          }
        } else {
          if ($(this).attr("href") === "#") {
            e.preventDefault();
          }
        }
      }
    );
  
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
  
    $(".sidebar-toggle").on("click", function () {
      sessionStorage.setItem(
        "hideMenu",
        $("#wrapper")
          .toggleClass("sidebar-collapsed")
          .delay(300)
          .hasClass("sidebar-collapsed")
      );
    });
  
    /*-------------------------------------
          Sidebar Menu Control Mobile
        -------------------------------------*/
    $(".sidebar-toggle-mobile").on("click", function () {
      $("#wrapper").toggleClass("sidebar-collapsed-mobile");
      if ($("#wrapper").hasClass("sidebar-collapsed")) {
        $("#wrapper").removeClass("sidebar-collapsed");
      }
    });
  
    /*-------------------------------------
          jquery Scollup activation code
       -------------------------------------*/
    $.scrollUp({
      scrollText: '<i class="fa fa-angle-up"></i>',
      easingType: "linear",
      scrollSpeed: 900,
      animation: "fade",
    });
  
    /*-------------------------------------
          jquery Scollup activation code
        -------------------------------------*/
    $("#preloader").fadeOut("slow", function () {
      $(this).remove();
    });
  
    $(function () {
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
            printer($(this).parents(".card").parent()[0]);
            e.preventDefault();
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
  
  function darkMode(state = "dark") {
    sessionStorage.setItem("theme", state);
    loadThemeMode();
  }
  
  function loadThemeMode() {
    let switchTheme = document.querySelector("#switchTheme #toggleTheme");
    document.body.classList.remove("theme-dark");
    switchTheme.checked = true;
    if (sessionStorage.getItem("theme") == "dark") {
      document.body.classList.add("theme-dark");
      switchTheme.checked = false;
    }
    switchTheme.addEventListener("change", (e) =>
      darkMode(switchTheme.checked ? false : "dark")
    );
  }
  loadThemeMode();
  
  function buttonActions() {
    const actionTitles = {
      enable: "Activer",
      active: "Activer",
  
      disable: "Désactiver",
  
      pDelib: "P. Deliberation",
      fDelib: "F. Deliberation",
  
      restore: "Restaurer",
  
      remove: "Supprimer",
      delete: "Supprimer",
    };
  
    const buttons = Object.keys(actionTitles)
      .map((type) => {
        const elements = $(
          `tbody > tr > td > div > div > [data-action-type="${type}"]`
        );
        if (elements.length === 0) return false;
        return {
          text: actionTitles[type],
          action: async () => {
            const selector = $(`tbody > tr > td > div > input:checked`)
              .closest("tr")
              .find(`td > div > div > [data-action-type="${type}"]`);
            document.body.click();
  
            if (selector.length === 0)
              return Swal.fire({
                icon: "error",
                title: "Aucun élément detecté",
                text: `Aucun élément n'a été sélectionné pour cette action. \nVeuillez en sélectionner au moins un et réessayer.`,
              });
            const { status } = await confirmAction(async () => {
              if (selector.is("a")) {
                for (const link of selector.toArray()) {
                  try {
                    const response = await fetch(link.href);
                    console.log("Action réussie", link.href);
                  } catch (error) {
                    console.error("Action échouée", link.href);
                  }
                }
              }
            }, `${actionTitles[type]}[${type}]`);
            if (
              status === "success" &&
              selector.data("actionAfter") === "refresh"
            ) {
              setTimeout(function () {
                $.dynamicLinkReload();
              }, 1000);
            }
          },
        };
      })
      .filter((button) => button !== false);
  
    if (!buttons.length) return;
  
    return {
      extend: "collection",
      text: "Actions",
      buttons,
    };
  }
  
  async function confirmAction(action, type) {
    if (typeof action === "function") {
      return {
        status: "success",
        data: await Swal.fire({
          title: "Êtes-vous sûr?",
          html: `<p>Voulez-vous effectuer cette action ?<br /> cela implique : ${type}</p>`,
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Yes, do it!",
        }).then(async (result) => {
          if (result.isConfirmed) {
            const res = await action();
            Swal.fire({
              position: "top-end",
              icon: "success",
              title: "Votre action a été réalisée avec succès",
              showConfirmButton: false,
              timer: 1500,
            });
            return res;
          }
        }),
      };
    }
  
    return {
      status: "error",
      data: Swal.fire({
        title: "Action Non valid",
        text: "L'action que vous essayez d'effectuer n'est pas valide.",
        icon: "error",
      }),
    };
  }
  