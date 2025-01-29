<script>
    function calculateCarbonFootprint() {
        const distance = parseFloat(document.getElementById('distance').value);
        const vehicleType = document.getElementById('vehicleType').value;
        let emissionFactor = 0;

        // Define emission factors for different vehicle types
        if (vehicleType === 'gasoline') {
            emissionFactor = 2.31; // Replace with the appropriate value
        } else if (vehicleType === 'diesel') {
            emissionFactor = 2.68; // Replace with the appropriate value
        } else if (vehicleType === 'electric') {
            emissionFactor = 0.0; // Replace with the appropriate value
        }

        // Calculate carbon footprint
        const carbonFootprint = (distance * emissionFactor).toFixed(2);

        // Display the result
        const result = document.getElementById('result');
        const carbonResult = document.getElementById('carbonResult');
        carbonResult.textContent = `${carbonFootprint} kg CO2`;
        result.style.display = 'block';
    }
</script>
