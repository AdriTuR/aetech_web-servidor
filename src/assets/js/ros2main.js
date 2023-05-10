
document.addEventListener('DOMContentLoaded', event => {
    console.log("entro en la pagina")

    
    canvasMap = document.getElementById("map");
    
    btn_con = document.getElementById("btn_con")
    btn_dis = document.getElementById("btn_dis")
    btn_dis.style.display = 'none'

    btn_con.addEventListener("click", connect)
    btn_dis.addEventListener("click", disconnect)

    // btn_move = document.getElementById("btn_move").addEventListener("click", move)
    btn_goto = document.getElementById("btn_goto")

    btn_goto.addEventListener("click", () => {
        var x = document.getElementById("goal_x").value;
        var y = document.getElementById("goal_y").value;
        goal(x, y)
    })

    // document.getElementById("btn_home").addEventListener("click", () => {
    //     goal(0, 0)
    // })


    //conn_text = document.getElementById("conn_text")

    data = {
        // ros connection
        ros: null,
        rosbridge_address: 'ws://192.168.0.16:9090/',
        connected: false,
        // service information 
        service_busy: false,
        service_response: ''
    }

    function connect() {

        console.log("Clic en connect")

        data.ros = new ROSLIB.Ros({
            url: data.rosbridge_address
        })

        // Define callbacks
        data.ros.on("connection", () => {
            data.connected = true
            console.log("Conexion con ROSBridge correcta")
            //conn_text.innerText = "Connected"
            btn_con.style.display = 'none'
            btn_dis.style.display = 'block'

        })
        data.ros.on("error", (error) => {
            console.log("Se ha producido algun error mientras se intentaba realizar la conexion")
            console.log(error)
        })
        data.ros.on("close", () => {
            data.connected = false
            console.log("Conexion con ROSBridge cerrada")
            //conn_text.innerText = "Disconnected"
            btn_dis.style.display = 'none'
            btn_con.style.display = 'block'

            canvasMap.innerHTML = ""
        })

        let odomTopic = new ROSLIB.Topic({
            ros: data.ros,
            name: '/odom',
            messageType: 'nav_msgs/msg/Odometry'
        })

        odomTopic.subscribe((message) => {
            data.position = message.pose.pose.position
        })

        //Subscribe to the map topic
        var mapTopic = new ROSLIB.Topic({
            ros: data.ros,
            name: '/map',
            messageType: 'nav_msgs/msg/OccupancyGrid'
        });

        //When a new map message is received, update the OccupancyGridClient with the new data
        mapTopic.subscribe((message) => {
            draw_occupancy_grid(canvasMap, message)
        });

        //Subscribe to the map topic
        var costmapTopic = new ROSLIB.Topic({
            ros: data.ros,
            name: '/local_costmap/costmap',
            messageType: 'nav_msgs/msg/OccupancyGrid'
        });

        //When a new map message is received, update the OccupancyGridClient with the new data
        costmapTopic.subscribe((message) => {
            //draw_occupancy_grid(canvasCostmap, message, data.position)
        });

        //Subscribe to the map topic
        var gCostmapTopic = new ROSLIB.Topic({
            ros: data.ros,
            name: '/global_costmap/costmap',
            messageType: 'nav_msgs/msg/OccupancyGrid'
        });

        //When a new map message is received, update the OccupancyGridClient with the new data
        gCostmapTopic.subscribe((message) => {
            //draw_occupancy_grid(canvasgCostmap, message)
        });

    }

    function disconnect() {
        data.ros.close()
        data.connected = false
        console.log('Clic en botón de desconexión')
    }

    function move() {
        let topic = new ROSLIB.Topic({
            ros: data.ros,
            name: '/cmd_vel',
            messageType: 'geometry_msgs/msg/Twist'
        })
        let message = new ROSLIB.Message({
            linear: { x: 0.1, y: 0, z: 0, },
            angular: { x: 0, y: 0, z: -0.2, }, //rotate
        })
        topic.publish(message)
    }

    function stop() {
        let topic = new ROSLIB.Topic({
            ros: data.ros,
            name: '/cmd_vel',
            messageType: 'geometry_msgs/msg/Twist'
        })
        let message = new ROSLIB.Message({
            linear: { x: 0, y: 0, z: 0, },
            angular: { x: 0, y: 0, z: 0, },
        })
        topic.publish(message)
    }

    function goal(x, y) {
        data.service_busy = true
        data.service_response = ''

        myPose = {
            header: {
                stamp: {
                    secs: 0,
                    nsecs: 100
                },
                frame_id: "map"
            },
            pose: {
                position: {
                    x: parseFloat(x),
                    y: parseFloat(y),
                    z: 0.0
                },
                orientation: {
                    w: 1.0
                }
            }
        }

        let topic = new ROSLIB.Topic({
            ros: data.ros,
            name: '/goal_pose',
            messageType: 'geometry_msgs/msg/PoseStamped'
        })
        let message = new ROSLIB.Message(myPose)
        topic.publish(message)
    }
 


});