document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('inventoryForm');
    const table = document.getElementById('inventoryTable').getElementsByTagName('tbody')[0];

    form.addEventListener('submit', function(event) {
        event.preventDefault();

        // Validar el formulario
        if (!form.checkValidity()) {
            event.stopPropagation();
            form.classList.add('was-validated');
            return;
        }

        // Obtener valores del formulario
        const productName = document.getElementById('productName').value;
        const productDescription = document.getElementById('productDescription').value;
        const productPrice = document.getElementById('productPrice').value;
        const productQuantity = document.getElementById('productQuantity').value;
        const productCategory = document.getElementById('productCategory').value;
        const purchaseDate = document.getElementById('purchaseDate').value;
        const supplier = document.getElementById('supplier').value;
        const expiryDate = document.getElementById('expiryDate').value;
        const storageLocation = document.getElementById('storageLocation').value;
        const additionalNotes = document.getElementById('additionalNotes').value;

        // Crear una nueva fila y agregarla a la tabla
        const newRow = table.insertRow();
        newRow.innerHTML = `
            <tr>
                <td>${table.rows.length + 1}</td>
                <td>${productName}</td>
                <td>${productDescription}</td>
                <td>${productPrice}</td>
                <td>${productQuantity}</td>
                <td>${productCategory}</td>
                <td>${purchaseDate}</td>
                <td>${supplier}</td>
                <td>${expiryDate}</td>
                <td>${storageLocation}</td>
                <td>${additionalNotes}</td>
            </tr>
        `;

        // Limpiar los campos del formulario
        form.reset();
        form.classList.remove('was-validated');
    });
});
