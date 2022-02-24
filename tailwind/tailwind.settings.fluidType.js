const fsMin = 1.125;
const fsMax = 1.25;
const msFactorMin = 1;
const msFactorMax = 1.125;
const screenMin = 20;
const screenMax = 96;

// Calc Min and Max Fontsize
const calcMulti = (multiMin = 0, multiMax = null) => {
  return {
    fsMin: fsMin * Math.pow(msFactorMin, multiMin),
    fsMax: fsMax * Math.pow(msFactorMax, multiMax || multiMin),
  };
};

// build the clamp property
const clamp = (multiMin = 0, multiMax = null) => {
  const _calcMulti = calcMulti(multiMin, multiMax || multiMin);
  console.log('_calcMulti', _calcMulti);
  const _fsMin = _calcMulti.fsMin;
  const _fsMax = _calcMulti.fsMax;
  return `clamp(${_fsMin}rem, calc(${_fsMin}rem + (${_fsMax} - ${_fsMin}) * ((100vw - ${screenMin}rem) / (${screenMax} - ${screenMin}))), ${_fsMax}rem)`;
};

module.exports = {
  xs: clamp(-2),
  sm: clamp(-1),
  base: clamp(0),
  lg: clamp(1),
  xl: clamp(2),
  '2xl': clamp(3),
  '3xl': clamp(4),
  '4xl': clamp(5),
  '5xl': clamp(6),
  '6xl': clamp(7),
  '7xl': clamp(8),
  '8xl': clamp(9),
  '9xl': clamp(10),
};
