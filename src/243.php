<?php
  function calculate_area($shape, $dimensions) {
    switch ($shape) {
      case 'rectangle':
        return $dimensions[0] * $dimensions[1];
      case 'circle':
        return M_PI * pow($dimensions[0], 2);
      default:
        throw new Exception("Unsupported shape: " . $shape);
    }
  }

  // Example usage
  try {
    echo calculate_area('rectangle', [4, 6]);  // Output: 24
    echo calculate_area('circle', [3, 5]);     // Output: approximately 47.12
    echo calculate_area('triangle', [3, 4, 5]); // Expected to throw an exception: Unsupported shape: triangle
  } catch (Exception $e) {
    echo "Error: " . $e->getMessage();
  }
?>
