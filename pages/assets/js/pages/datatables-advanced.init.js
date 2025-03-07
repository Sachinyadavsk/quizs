$(document).ready(function () {
   $("#datatable-col-render").DataTable({
      columnDefs: [{
         render: function (a, t, i) {
            return a + " (" + i[3] + ")"
         },
         targets: 0
      }, {
         visible: !1,
         targets: [3]
      }],
      language: {
         paginate: {
            previous: "<i class='mdi mdi-chevron-left'>",
            next: "<i class='mdi mdi-chevron-right'>"
         }
      },
      drawCallback: function () {
         $(".dataTables_paginate > .pagination").addClass("pagination")
      }
   }), $("#datatable-col-visiblility").DataTable({
      dom: "Bfrtip",
      buttons: ["colvis"],
      scrollX:true,
      language: {
         paginate: {
            previous: "<i class='mdi mdi-chevron-left'>",
            next: "<i class='mdi mdi-chevron-right'>"
         }
      },
      drawCallback: function () {
         $(".dataTables_paginate > .pagination").addClass("pagination")
      }
   }), $("#datatable-footer-callback").DataTable({
      footerCallback: function (a, t, i, e, n) {
         function l(a) {
            return "string" == typeof a ? +a.replace(/[\$,]/g, "") : "number" == typeof a ? a : 0
         }
         var o = this.api();
         total = o.column(4).data().reduce(function (a, t) {
            return l(a) + l(t)
         }, 0), pageTotal = o.column(4, {
            page: "current"
         }).data().reduce(function (a, t) {
            return l(a) + l(t)
         }, 0), $(o.column(4).footer()).html("$" + pageTotal + " ( $" + total + " total)")
      },
      buttons: ["colvis"],
      language: {
         paginate: {
            previous: "<i class='mdi mdi-chevron-left'>",
            next: "<i class='mdi mdi-chevron-right'>"
         }
      },
      drawCallback: function () {
         $(".dataTables_paginate > .pagination").addClass("pagination")
      }
   }), $("#datatable-multi-control").DataTable({
      dom: '<"top"lp<"clear">>rt<"bottom"iflp<"clear">>',
      language: {
         paginate: {
            previous: "<i class='mdi mdi-chevron-left'>",
            next: "<i class='mdi mdi-chevron-right'>"
         }
      },
      drawCallback: function () {
         $(".dataTables_paginate > .pagination").addClass("pagination")
      }
   }), $("#datatable-row-callback").DataTable({
      createdRow: function (a, t, i) {
         console.log(t[5]), 15e4 < +t[5].replace(/[\$,]/g, "") && $("td", a).eq(5).addClass("fw-bold text-primary")
      },
      language: {
         paginate: {
            previous: "<i class='mdi mdi-chevron-left'>",
            next: "<i class='mdi mdi-chevron-right'>"
         }
      },
      drawCallback: function () {
         $(".dataTables_paginate > .pagination").addClass("pagination")
      }
   })
});