<div class="form-container">
    <div class="input-form">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="arraySize">Enter size of an array:</label>
            <input type="number" id="arraySize" name="arraySize" min="1" required placeholder="Type in an integer">
            
            <label for="operation">Select an option:</label>
            <select id="operation" name="operation" required>
                <option value="mean">Compute Mean</option>
                <option value="median">Compute Median</option>
                <option value="mode">Compute Mode</option>
            </select>
            
            <button type="submit">Submit</button>
        </form>
    </div>
</div>