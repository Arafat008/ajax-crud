jQuery(document).ready(function () {
  viewAllStudent();
  jQuery("#add_btn").click(function () {
    handleAddStudent();
  });
  jQuery("#update_btn").click(function () {
    handleUpdateStudent();
  });
});

function handleAddStudent() {
  let id = jQuery("#id").val();
  let name = jQuery("#name").val();
  let fatherName = jQuery("#fatherName").val();
  let motherName = jQuery("#motherName").val();
  let phone = jQuery("#phone").val();
  let address = jQuery("#address").val();

  $.ajax({
    url: "process.php",
    type: "POST",
    data: {
      id: id,
      name: name,
      fatherName: fatherName,
      motherName: motherName,
      phone: phone,
      address: address,
      functionName: "addStudent",
    },
    success: function (response) {
      jQuery(".msg").fadeIn();
      jQuery(".msg").html(response);
      jQuery(".msg").fadeOut(2000);
      jQuery("#id").val("");
      jQuery("#name").val("");
      jQuery("#fatherName").val("");
      jQuery("#motherName").val("");
      jQuery("#phone").val("");
      jQuery("#address").val("");
      viewAllStudent();
    },
  });
}

function handleUpdateStudent() {
  let id = jQuery("#id").val();
  let name = jQuery("#name").val();
  let fatherName = jQuery("#fatherName").val();
  let motherName = jQuery("#motherName").val();
  let phone = jQuery("#phone").val();
  let address = jQuery("#address").val();

  $.ajax({
    url: "process.php",
    type: "POST",
    data: {
      id: id,
      name: name,
      fatherName: fatherName,
      motherName: motherName,
      phone: phone,
      address: address,
      functionName: "updateStudent",
    },
    success: function (response) {
      jQuery(".msg").fadeIn();
      jQuery(".msg").html(response);
      jQuery(".msg").fadeOut(2000);
      jQuery("#id").val("");
      jQuery("#name").val("");
      jQuery("#fatherName").val("");
      jQuery("#motherName").val("");
      jQuery("#phone").val("");
      jQuery("#address").val("");
      viewAllStudent();
    },
  });
}

function viewAllStudent() {
  $.ajax({
    url: "process.php",
    type: "POST",
    data: {
      functionName: "viewAllStudents",
    },
    success: function (response) {
      jQuery(".student-list").html(response);
    },
  });
}

function handleEdit(id) {
  $.ajax({
    url: "process.php",
    type: "POST",
    dataType: "json",
    data: {
      id: id,
      functionName: "viewStudentDetails",
    },
    success: function (response) {
      jQuery("#id").val(response.id);
      jQuery("#name").val(response.name);
      jQuery("#fatherName").val(response.father);
      jQuery("#motherName").val(response.mother);
      jQuery("#phone").val(response.phone);
      jQuery("#address").val(response.address);
    },
  });
}

function handleDelete(id) {
  if (confirm("ARE YOU SURE YOU WANT TO DELETE THIS STUDENT?")) {
    $.ajax({
      url: "process.php",
      type: "POST",
      data: {
        id: id,
        functionName: "deleteStudent",
      },
      success: function (response) {
        jQuery(".msg").fadeIn();
        jQuery(".msg").html(response);
        jQuery(".msg").fadeOut(2000);
        viewAllStudent();
      },
    });
  }
}
