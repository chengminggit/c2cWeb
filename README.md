# c2cWeb 
## c2c旅游者住宿网上预订平台软件开发实践
### （1）系统描述与基本要求:
要求同学们以小组的形式完成一个针对面向对象系统的分析与设计，题目是：C2C旅游者住宿网上预定平台的分析与设计。该系统采用运行在互联网上的3层客户端-服务器架构。本设计需要同学们按照需求描述、领域建模、系统分析、系统设计的顺序，进行分析与设计。在本设计中，要求同学们能够建立比较完整的文档，尽可能多地应用本课程中学习的面向对象软件设计的各种元素。要求按照顺序画出领域模型图，用例图，用例描述，时序图（顺序图），架构图，分析类图，设计类图，活动图，和部署图等。本作业不需要写代码，但是可以利用一些绘图工具绘制一些原型等等，例如用户图形界面。

### （2）系统基本功能描述：
本系统提供给出租者用户和租户用于房源出租和游客住宿的C2C业务平台。使用该平台:
>	出租者用户（包括宾馆、个人房源出租者）可以发布待出租房源信息，这些信息被存入到数据库。这些信息注册用户（包括租户）都可以看到；
>	租户可以提交固定格式的申请表，意向性地表达要租用的房源的地址、类型、面积等等信息。在此情况下，系统可以提供匹配列表。该列表中提供的待租房源最接近该申请表的内容；
>	租户可以利用该系统提交房源预订单；该固定格式的预订单是准确的预订单（包括出租者姓名、身份证号、租户姓名、身份证号与具体的宾馆房间预定信息、或者其它房源，例如民房的准确的预定信息，出租房源的地址），系统要将订单信息存入数据库；
>	租户可以通过该系统和出租者用户之间进行交流，例如对住宿价格进行商讨等，所以该系统应该提供类似的在线聊天工具。 一旦租户和出租者用户之间达成共识，他们之间需要签署一份固定格式的合同。该合同的电子版应该上传到数据库保存。
>	系统应该显示房源出租信息列表，即房源在哪个城市，什么区，街道名称；建筑类型（楼房、平房、宾馆），房间面积、租价，按照租期打折等等。
>	租户和出租者用户可以通过使用该平台进行互评。系统会将这些评价记录到数据库，并且显示给所有用户。
>	该平台对出租者用户和租户之间的交易细节不负责任，出租者用户和租户之间的一些交易细节可以线下进行，例如房租支付方式，等等细节。
### （3）各类用户的责任：
####	系统管理员的职责：
>	负责用户管理，包括用户信息的注册和处理密码丢失、修改用户密码。用户信息包括：用户ID号、昵称、姓名、密码、电子邮件、电话、注册日期、具体地址等信息。
####	平台业务管理员的职责：
>	平台业务管理员发布免责声明（目的是保护住房、宾馆出租者和承租者；使得他们的行为、住宿条件等等方面不违反法律）
>	平台业务管理员可以查看每个旅游住宿申请者的信息，以便能够及时地删除有劣迹或者有犯罪前科的人提交的申请。杜绝利用平台进行毒品、色情等交易。
>	平台业务管理员可以发布一些旅游景点信息；
>	平台业务管理员可查看所有旅游住宿申请者所下的预定单；
>	平台业务管理员可以发布一些住宿推荐信息；
>	住宿申请者可以和平台业务管理员进行有限的交流，咨询一些信息

####	出租者用户的职责
>	出租者用户可以登录系统录入待出租的房源信息；格式：填写标准的房源信息单（描述房源信息，包括房源地址、类型、面积、对租户人数、性别的限制；租金金额，押金等）
>	房源类型包括：宾馆、别墅、民房、公寓等
>	出租者用户可以查看、修改自己的房源信息单数据
>	决定是否接受预订单
>	与租户签署正式合同，该合同被存入数据库
>	出租者用户可以查看自己的房源是否被租用的信息
>	可以使用系统在线评价租户，该评价信息注册用户都可以看到
####	租户用户的职责
>	租户用户可以通过登录网站提交预订单，填写预订单的时候,要提供对住宿条件的描述，例如是住民房，快捷宾馆，酒店；住宿人数,等等一般性的要求；
>	填写、提交正式订单；
>	在订单处于保存状态,但是还没有提交的情况下,租户用户可以修改订单；
>	租户用户可查看自己的所有订单；
>	可以利用系统对住宿房（房间、宾馆房间）条件进行评价，该评价信息注册用户都可以看到。
