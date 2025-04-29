<div class="result-container">
    <h3 class="info-text">Initialized array --></h3>
    <div class="array-display">
        <?php foreach ($randomArray as $value): ?>
            <span class="array-value"><?php echo $value; ?></span>
        <?php endforeach; ?>
    </div>

    <?php if ($selectedOption == "mean"): ?>
        <div class="result-value">Mean = <?php echo number_format($result, 1); ?></div>
    <?php elseif ($selectedOption == "median"): ?>
        <div class="result-value">Median = <?php echo $result; ?></div>
    <?php elseif ($selectedOption == "mode"): ?>
        <?php if ($hasModes): ?>
            <?php foreach ($modes as $mode): ?>
                <div class="result-value">Mode = <?php echo $mode; ?></div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="result-value">There is no mode in the set.</div>
        <?php endif; ?>
    <?php endif; ?>
</div>