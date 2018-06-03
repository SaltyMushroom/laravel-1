<div>
<form action="{{action('StudentController@store')}}" method="POST">
  <p>姓名: <input type="text" name="name"/></p>
  <p>性别:<input type="text" name="gender" /></p>
  <p>手机号:<input type="text" name="phonenumber"/></p>
  <p>邮箱:<input type="text" name="mail" /></p>
  <p>学号:<input type="text" name="id" /></p>
  <p>学院:<input type="text" name="college" /></p>
  <p>专业:<input type="text" name="major" /></p>
  <p>备注:<input type="text" name="extra" /></p>
  <button type="submit" >提交</button>
  <button type="submit" onclick="">获取列表</button>
</form>
</div>