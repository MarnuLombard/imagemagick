<?php

namespace Rfd\ImageMagick\Options;

abstract class CommonOptions {
    /**
     * Replaces "Smart Fit"
     */
    const MODE_ONLY_SHRINK_LARGER   = 1;

    const MODE_FILL_AREA   = 2;

    const MODE_FILL_AREA_OR_FIT = 4;

    const MODE_RESIZE_ABSOLUTE = 8;
    
    const MODE_USE_FILTER = 16;

    // Gravity definitions.  Follows ImageMagick's conventions.

    const GRAVITY_NORTHWEST     = 'northwest';

    const GRAVITY_NORTH         = 'north';

    const GRAVITY_NORTHEAST     = 'northeast';

    const GRAVITY_WEST          = 'west';

    const GRAVITY_CENTER        = 'center';

    const GRAVITY_EAST          = 'east';

    const GRAVITY_SOUTHWEST     = 'southwest';

    const GRAVITY_SOUTH         = 'south';

    const GRAVITY_SOUTHEAST     = 'southeast';

    const FORMAT_JPG            = 'jpg';
    const FORMAT_JEPG           = 'jpg';
    const FORMAT_PNG            = 'png';
    const FORMAT_GIF            = 'gif';

    // A subset of the available color spaces
    const COLOR_SPACE_CMYK = 'CMYK';
    const COLOR_SPACE_GRAY = 'Gray';
    const COLOR_SPACE_HSB = 'HSB';
    const COLOR_SPACE_HSL = 'HSL';
    const COLOR_SPACE_LAB = 'Lab';
    const COLOR_SPACE_RGB = 'RGB';
    const COLOR_SPACE_SRGB = 'sRGB';
    const COLOR_SPACE_TRANSPARENT = 'Transparent';
    const COLOR_SPACE_UNDEFINED = 'Undefined';
} 
