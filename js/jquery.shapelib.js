function calculateCoordinate(count, r, cx, cy) {
    const sectors = [];
    let startAngle = -90;
    let endAngle = 0;
    let maxCard = 6;
    for (let i=0; i<count; i++)  {
        if (i<=maxCard-1){
            const angle = 360/maxCard;
            endAngle += angle;
            const rad = Math.PI / 180;
            const x = cx + r * Math.cos(startAngle * rad);
            const y = cy + r * Math.sin(startAngle * rad);
            startAngle += angle;
            sectors.push({x, y});
        } else {
            const angle = 360/(count-maxCard);
            endAngle += angle;
            const rad = Math.PI / 180;
            const x = cx + r * 2 * Math.cos(startAngle * rad);
            const y = cy + r * 2 * Math.sin(startAngle * rad);
            startAngle += angle;
            sectors.push({x, y});
        }
    }
    console.log(sectors)
}

