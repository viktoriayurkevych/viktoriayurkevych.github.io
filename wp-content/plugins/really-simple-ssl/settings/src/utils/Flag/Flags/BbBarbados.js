import * as React from "react";
const SvgBbBarbados = (props) => (
  <svg
    xmlns="http://www.w3.org/2000/svg"
    width={16}
    height={12}
    fill="none"
    {...props}
  >
    <mask
      id="BB_-_Barbados_svg__a"
      width={16}
      height={12}
      x={0}
      y={0}
      maskUnits="userSpaceOnUse"
      style={{
        maskType: "luminance",
      }}
    >
      <path fill="#fff" d="M0 0h16v12H0z" />
    </mask>
    <g fillRule="evenodd" clipRule="evenodd" mask="url(#BB_-_Barbados_svg__a)">
      <path fill="#2E42A5" d="M11 0h5v12h-5V0Z" />
      <path fill="#FECA00" d="M5 0h6v12H5V0Z" />
      <path fill="#2E42A5" d="M0 0h5v12H0V0Z" />
      <path
        fill="#000"
        d="M9.217 7.637c.317-.655.681-1.85.681-1.85l.277-.822-1.097.398.26.15s-.453.906-.681 1.348c-.228.442-.25.15-.25.15l.038-3.085.252-.068-.628-1.206-.8 1.223.352.01s-.029 3.253-.078 3.126c-.027-.073-.1.151-.136.064-.222-.545-.526-1.601-.526-1.601l.178-.167-1.195-.245.357.734s.314 1.308.66 1.947c.077.202.453.288.453.288s.183-.186.229 0c.045.186 0 .938 0 .938h.843s-.059-.71 0-.938c.06-.228.244 0 .244 0s.49-.192.567-.394Z"
      />
    </g>
  </svg>
);
export default SvgBbBarbados;
