// employee expense
const xValues = ["2022", "2023", "2024"];
const employeeValues = [90, 30, 40, 24, 15];
const barColors = ["red", "green","blue"]
new Chart("employeeExpenseChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: employeeValues 
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Employees Expense"
    }
  }
});


// fertilizer expense
const yfValues = ["2022", "2023", "2024"];
const fertilizerValues = [20, 50, 30, 24, 15];
const nfbarColors = ["red", "green","blue"]
new Chart("fertilizerChart", {
  type: "bar",
  data: {
    labels: yfValues,
    datasets: [{
      backgroundColor: barColors,
      data: fertilizerValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Fertlizer Expense"
    }
  }
});


// gas expense
const ygasValues = ["2022", "2023", "2024"];
const gasValues = [20, 50, 30, 24, 15];
const ncGasbarColors = ["red", "green","blue"]
new Chart("gasChart", {
  type: "bar",
  data: {
    labels: ygasValues,
    datasets: [{
      backgroundColor: barColors,
      data:gasValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Gas Expense"
    }
  }
});

// other expense
const yoValues = ["2022", "2023", "2024"];
const otherValues = [20, 50, 30, 24, 15];
const ncobarColors = ["red", "green","blue"]
new Chart("otherExpenseChart", {
  type: "bar",
  data: {
    labels: yoValues,
    datasets: [{
      backgroundColor: barColors,
      data: otherValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Other Expense"
    }
  }
});

// sale
const ySaleValues = ["2022", "2023", "2024"];
const saleValues = [20, 50, 30, 24, 15];
const salebarColors = ["red", "green","blue"]
new Chart("saleChart", {
  type: "bar",
  data: {
    labels: ySaleValues,
    datasets: [{
      backgroundColor: barColors,
      data: saleValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Sale"
    }
  }
});