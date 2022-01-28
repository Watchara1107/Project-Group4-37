require("./bootstrap");
import Swal from "sweetalert2";

window.deleteConfirm = function (id, url) {
    Swal.fire({
        icon: "warning",
        title: "ต้องการลบข้อมูลนี้หรือไม่?",
        showCancelButton: true,
        confirmButtonText: "ลบ",
        cancelButtonText: "ยกเลิก",
        confirmButtonColor: "#e3342f",
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: "ลบข้อมูลสำเร็จ",
                icon: "success",
                confirmButtonColor: "#3085d6",
                confirmButtonText: "ตกลง",
            }).then(() => {
                window.location.href = url + "/delete/" + id;
            });
        }
    });
};
window.changestatus0 = function (id) {
    var formData = new FormData();
    Swal.fire({
        title: "ต้องการเปิดการใช้งานรูปภาพหรือไม่?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "เปิดการใช้งาน",
        cancelButtonText: "ยกเลิก",
    }).then((result) => {
        if (result.isConfirmed) {
            formData.append("status", 1);
            formData.append(
                "_token",
                $('meta[name="csrf-token"]').attr("content")
            );
            var request = new XMLHttpRequest();
            request.open("POST", "background/edit/" + id);
            request.send(formData);
            Swal.fire(
                "เปิดการใช้งานรูปภาพสำเร็จ",
                "รูปภาพถูกเปิดการใช้งานแล้ว",
                "success"
            ).then(() => {
                location.reload();
            });
        }
    });
};

window.changestatus1 = function (id) {
    var formData = new FormData();
    Swal.fire({
        title: "ต้องการปิดการใช้งานรูปภาพหรือไม่?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "ปิดการใช้งาน",
        cancelButtonText: "ยกเลิก",
    }).then((result) => {
        if (result.isConfirmed) {
            formData.append("status", 0);
            formData.append(
                "_token",
                $('meta[name="csrf-token"]').attr("content")
            );
            var request = new XMLHttpRequest();
            request.open("POST", "background/edit/" + id);
            request.send(formData);
            Swal.fire(
                "ปิดการใช้งานรูปภาพสำเร็จ",
                "รูปภาพถูกปิดการใช้งานแล้ว",
                "success"
            ).then(() => {
                location.reload();
            });
        }
    });
};
window.insertimg = function () {
    (async () => {
        const { value: file } = await Swal.fire({
            title: "เลือกรูปภาพที่ต้องการ",
            input: "file",
            inputAttributes: {
                accept: "image/*",
                "aria-label": "เลือกรูปภาพ",
            },
            confirmButtonText: "เพิ่มรูปภาพ",
        });

        if (file) {
            const reader = new FileReader();
            reader.onload = (e) => {
                Swal.fire({
                    title: "ยืนยันรูปภาพ",
                    confirmButtonText: "ตกลง",
                    imageUrl: e.target.result,
                    imageWidth: 400,
                    imageHeight: 300,
                    imageAlt: "The uploaded picture",
                }).then((result) => {
                    if (result.isConfirmed) {
                        var formData = new FormData();
                        formData.append("image", file);
                        formData.append(
                            "_token",
                            $('meta[name="csrf-token"]').attr("content")
                        );

                        var request = new XMLHttpRequest();
                        request.open("POST", "background/create");
                        request.send(formData);
                        Swal.fire(
                            "เพิ่มรูปภาพสำเร็จ",
                            "รูปภาพถูกเพิ่มแล้ว",
                            "success"
                        ).then(() => {
                            location.reload();
                        });
                    }
                });
            };
            reader.readAsDataURL(file);
        }
    })();
};
window.editimg = function (id) {
    var formData = new FormData();
    (async () => {
        const { value: file } = await Swal.fire({
            title: "เลือกรูปภาพที่ต้องการ",
            input: "file",
            inputAttributes: {
                accept: "image/*",
                "aria-label": "Upload your profile picture",
            },
            confirmButtonText: "แก้ไขรูปภาพ",
        });

        if (file) {
            const reader = new FileReader();
            reader.onload = (e) => {
                Swal.fire({
                    title: "ยืนยันรูปภาพ",
                    confirmButtonText: "ตกลง",
                    imageUrl: e.target.result,
                    imageWidth: 400,
                    imageHeight: 300,
                    imageAlt: "The uploaded picture",
                }).then((result) => {
                    if (result.isConfirmed) {
                        formData.append("image", file);
                        formData.append(
                            "_token",
                            $('meta[name="csrf-token"]').attr("content")
                        );
                        var request = new XMLHttpRequest();
                        request.open("POST", "background/edit/" + id);
                        request.send(formData);
                        Swal.fire(
                            "แก้ไขรูปภาพสำเร็จ",
                            "แก้ไขรูปภาพเรียบร้อยแล้ว",
                            "success"
                        ).then(() => {
                            location.reload();
                        });
                    }
                });
            };
            reader.readAsDataURL(file);
        }
    })();
};

window.userstatus0 = function (id, name) {
    var formData = new FormData();
    Swal.fire({
        title: "ต้องการทำให้ผู้ใช้ " + name + " เป็น Admin หรือไม่?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "ตกลง",
        cancelButtonText: "ยกเลิก",
    }).then((result) => {
        if (result.isConfirmed) {
            formData.append("type", 1);
            formData.append(
                "_token",
                $('meta[name="csrf-token"]').attr("content")
            );
            var request = new XMLHttpRequest();
            request.open("POST", "users/edit/" + id);
            request.send(formData);
            Swal.fire(
                "ผู้ใช้ " + name + " เป็น Admin เรียบร้อยแล้ว",
                "ผู้ใช้นี้จะเป็น Admin และสามารถเข้าถึงระบบได้",
                "success"
            ).then(() => {
                location.reload();
            });
        }
    });
};

window.userstatus1 = function (id, name) {
    var formData = new FormData();
    Swal.fire({
        title: "ต้องการทำให้ผู้ใช้ " + name + " เป็น User หรือไม่?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "ตกลง",
        cancelButtonText: "ยกเลิก",
    }).then((result) => {
        if (result.isConfirmed) {
            formData.append("type", 0);
            formData.append(
                "_token",
                $('meta[name="csrf-token"]').attr("content")
            );
            var request = new XMLHttpRequest();
            request.open("POST", "users/edit/" + id);
            request.send(formData);
            Swal.fire(
                "ผู้ใช้ " + name + " เป็น User เรียบร้อยแล้ว",
                "ผู้ใช้นี้จะเป็น User และไม่สามารถเข้าถึงระบบได้",
                "success"
            ).then(() => {
                location.reload();
            });
        }
    });
};
window.newherb = function () {
    if ($("#name").val() == "") {
        Swal.fire({
            icon: "error",
            title: "กรุณากรอก ชื่อ",
            text: "กรุณากรอกข้อมูลให้ครบถ้วน",
            showConfirmButton: false,
            timer: 1000,
        });
        return false;
    } else if ($("#description").val() == "") {
        Swal.fire({
            icon: "error",
            title: "กรุณากรอก สรรพคุณ",
            text: "กรุณากรอกข้อมูลให้ครบถ้วน",
            showConfirmButton: false,
            timer: 1000,
        });
        return false;
    } else if ($("#image").val() == "") {
        Swal.fire({
            icon: "error",
            title: "กรุณาเลือก รูปภาพ",
            text: "กรุณากรอกข้อมูลให้ครบถ้วน",
            showConfirmButton: false,
            timer: 1000,
        });
        return false;
    } else {
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener("mouseenter", Swal.stopTimer);
                toast.addEventListener("mouseleave", Swal.resumeTimer);
            },
        });

        Toast.fire({
            icon: "success",
            title: "กำลังบันทึกข้อมูล",
        });
    }
};
window.editherb = function () {
    if ($("#name").val() == "") {
        Swal.fire({
            icon: "error",
            title: "ชื่อ ห้ามเว้นว่าง",
            text: "กรุณากรอกข้อมูลให้ครบถ้วน",
            showConfirmButton: false,
            timer: 1000,
        });
        return false;
    } else if ($("#description").val() == "") {
        Swal.fire({
            icon: "error",
            title: "สรรพคุณ ห้ามเว้นว่าง",
            text: "กรุณากรอกข้อมูลให้ครบถ้วน",
            showConfirmButton: false,
            timer: 1000,
        });
        return false;
    } else {
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener("mouseenter", Swal.stopTimer);
                toast.addEventListener("mouseleave", Swal.resumeTimer);
            },
        });

        Toast.fire({
            icon: "success",
            title: "กำลังบันทึกข้อมูล",
        });
    }
};
