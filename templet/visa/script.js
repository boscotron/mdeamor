            function onVisaCheckoutReady() {
                V.init({
                    apikey: "6UQXT4OXUJBXM5H88N6Y13Ff8OsnPzOKsnbBaIfv0muinoTh4",
                    encryptionKey: "ZCA9O2FGSMUCBH3151TI13-oEFdJdNRYwTPFD6jbEzEFZhBNQ",
                    paymentRequest: {
                        currencyCode: "MXN",
                        subtotal: document.getElementById("monto-visa").value
                    }
                });
                V.on("payment.success", function (payment) {
                    alert("Pago exitoso");
                    console.log(payment);
                });
                V.on("payment.cancel", function (payment) {
                    alert("Pago cancelado");
                    console.log(payment);
                });
                V.on("payment.error", function (payment, error) {
                    alert("Error");
                    console.log(error);
                });
            }
