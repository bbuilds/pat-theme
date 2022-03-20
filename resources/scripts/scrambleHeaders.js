import Scrambler from 'scrambling-letters';

export default function scrambleHeadings() {
  const scrambleTarget = document.getElementById('scramble-header');

  if (scrambleTarget) {
    Scrambler({
      target: '#scramble-header',
      random: [750, 1000],
      speed: 100,
    });
  }
}
